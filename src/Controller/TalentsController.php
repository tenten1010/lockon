<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Talents Controller
 *
 * @property \App\Model\Table\TalentsTable $Talents
 *
 * @method \App\Model\Entity\Talent[] paginate($object = null, array $settings = [])
 */
class TalentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $talents = $this->paginate($this->Talents->find()->order(['orders']));

        $this->set(compact('talents'));
        $this->set('_serialize', ['talents']);
    }

    /**
     * View method
     *
     * @param string|null $id Talent id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($name = null)
    {
        $talent = $this->Talents->find()->where(['name'=>$name,'status'=>1])->first();
        $images = $this->Talents->Medias->find()->where(['talent_id'=>$talent->id,'type'=>'image'])->order(['orders']);
        $videos = $this->Talents->Medias->find()->where(['talent_id'=>$talent->id,'type'=>'video'])->order(['orders']);
        $this->set('talent', $talent);
        $this->set('images', $images->toArray());
        $this->set('videos', $videos->toArray());
        $this->set('_serialize', ['talent']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($name = null)
    {
        $this->autoRender = false;
        $talent = $this->Talents->newEntity();
        $talent->name = $name;
        $this->ld($talent);
        if($this->Talents->save($talent)){
            return $this->redirect('talents/edit/'.$talent->name);
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Talent id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($name = null)
    {
        $talent = $this->Talents->find()->where(['name'=>$name])->contain(['medias'])->first();
        if ($this->request->is(['post'])) {
            $talent = $this->Talents->patchEntity($talent, $this->request->getData());
            if ($this->Talents->save($talent)) {
                $this->Flash->success(__('保存しました'));
                return $this->redirect('talents/'.$talent->name);
            }
            debug($talent->errors());
            $this->Flash->error(__('保存できませんでした'));
        }
        $this->set(compact('talent'));
        $this->set('_serialize', ['talent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Talent id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $talent = $this->Talents->get($id);
        if ($this->Talents->delete($talent)) {
            $this->Flash->success(__('The talent has been deleted.'));
        } else {
            $this->Flash->error(__('The talent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

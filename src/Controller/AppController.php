<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{

    protected $isMobile;
    protected $authUser;

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Auth', [
            'authorize' => ['Controller']
        ]);

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->_load_isMobile();
        $this->_load_authUser();
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Http\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        // Note: These defaults are just to get started quickly with development
        // and should not be used in production. You should instead set "_serialize"
        // in each action as required.
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['index', 'view','company','appoint']);
    }

    public function isAuthorized($user){
        if ($this->authUser['role'] == 'admin'){
            return true;
        }
    }

    private function _load_isMobile(){
        if (!isset($_SERVER['HTTP_USER_AGENT'])) {
            $isMobile=false;
        }else{
            $ua=$_SERVER['HTTP_USER_AGENT'];
            $isMobile=((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false));
        }
        $this->isMobile = $isMobile;
        $this->set('isMobile', $isMobile);
    }

    private function _load_authUser(){
        $authUser = $this->Auth->user();
        $this->authUser = $authUser;
        $this->set('authUser',$authUser);
    }
}

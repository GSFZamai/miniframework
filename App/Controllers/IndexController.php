<?php

    namespace App\Controllers;

    use MF\Controller\Action;
    use MF\Model\Container;

    class IndexController extends Action{

        public function index() {
            //$this->view->dados = array('Caldo Verde', 'Caldo Detox', 'Caldo Laranja');
            $produto = Container::getModel('Produto');   
            
            $produtos = $produto->getProdutos();

            $this->view->dados = $produtos;

            $this->render('index', 'layout1');
        }

        public function sobreNos() {
            //$this->view->dados = array('Batata', 'Cenoura', 'Cebola');
            
            $info = Container::getModel('Info');

            $infos = $info->getInfos();

            $this->view->dados = $infos;

            $this->render('sobreNos', 'layout2');
        }

    }

?>
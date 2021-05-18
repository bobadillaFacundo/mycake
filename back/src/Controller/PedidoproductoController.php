<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pedidoproducto Controller
 *
 * @method \App\Model\Entity\Pedidoproducto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PedidoproductoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $pedidoproducto = $this->paginate($this->Pedidoproducto);

        $this->set(compact('pedidoproducto'));
    }

    /**
     * View method
     *
     * @param string|null $id Pedidoproducto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pedidoproducto = $this->Pedidoproducto->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('pedidoproducto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pedidoproducto = $this->Pedidoproducto->newEmptyEntity();
        if ($this->request->is('post')) {
            $pedidoproducto = $this->Pedidoproducto->patchEntity($pedidoproducto, $this->request->getData());
            if ($this->Pedidoproducto->save($pedidoproducto)) {
                $this->Flash->success(__('The pedidoproducto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pedidoproducto could not be saved. Please, try again.'));
        }
        $this->set(compact('pedidoproducto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pedidoproducto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pedidoproducto = $this->Pedidoproducto->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pedidoproducto = $this->Pedidoproducto->patchEntity($pedidoproducto, $this->request->getData());
            if ($this->Pedidoproducto->save($pedidoproducto)) {
                $this->Flash->success(__('The pedidoproducto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pedidoproducto could not be saved. Please, try again.'));
        }
        $this->set(compact('pedidoproducto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pedidoproducto id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pedidoproducto = $this->Pedidoproducto->get($id);
        if ($this->Pedidoproducto->delete($pedidoproducto)) {
            $this->Flash->success(__('The pedidoproducto has been deleted.'));
        } else {
            $this->Flash->error(__('The pedidoproducto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

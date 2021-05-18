<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Factura Controller
 *
 * @method \App\Model\Entity\Factura[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FacturaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $factura = $this->paginate($this->Factura);

        $this->set(compact('factura'));
    }

    /**
     * View method
     *
     * @param string|null $id Factura id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $factura = $this->Factura->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('factura'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $factura = $this->Factura->newEmptyEntity();
        if ($this->request->is('post')) {
            $factura = $this->Factura->patchEntity($factura, $this->request->getData());
            if ($this->Factura->save($factura)) {
                $this->Flash->success(__('The factura has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The factura could not be saved. Please, try again.'));
        }
        $this->set(compact('factura'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Factura id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $factura = $this->Factura->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $factura = $this->Factura->patchEntity($factura, $this->request->getData());
            if ($this->Factura->save($factura)) {
                $this->Flash->success(__('The factura has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The factura could not be saved. Please, try again.'));
        }
        $this->set(compact('factura'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Factura id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $factura = $this->Factura->get($id);
        if ($this->Factura->delete($factura)) {
            $this->Flash->success(__('The factura has been deleted.'));
        } else {
            $this->Flash->error(__('The factura could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

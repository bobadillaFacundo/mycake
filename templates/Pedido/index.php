<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $pedido
 */
?>
<div class="pedido index content">
    <?= $this->Html->link(__('New Pedido'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pedido') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idPedido') ?></th>
                    <th><?= $this->Paginator->sort('idCliente') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pedido as $pedido): ?>
                <tr>
                    <td><?= $this->Number->format($pedido->idPedido) ?></td>
                    <td><?= $this->Number->format($pedido->idCliente) ?></td>
                    <td><?= h($pedido->fecha) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pedido->idPedido]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pedido->idPedido]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pedido->idPedido], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->idPedido)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

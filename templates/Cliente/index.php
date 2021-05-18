<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $cliente
 */
?>
<div class="cliente index content">
    <?= $this->Html->link(__('New Cliente'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cliente') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idCliente') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cliente as $cliente): ?>
                <tr>
                    <td><?= $this->Number->format($cliente->idCliente) ?></td>
                    <td><?= h($cliente->nombre) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cliente->idCliente]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->idCliente]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->idCliente], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->idCliente)]) ?>
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

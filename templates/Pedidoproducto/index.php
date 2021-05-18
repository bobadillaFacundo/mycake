<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $pedidoproducto
 */
?>
<div class="pedidoproducto index content">
    <?= $this->Html->link(__('New Pedidoproducto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pedidoproducto') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idPedido') ?></th>
                    <th><?= $this->Paginator->sort('idProducto') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?= $this->Paginator->sort('cantidad') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pedidoproducto as $pedidoproducto): ?>
                <tr>
                    <td><?= $this->Number->format($pedidoproducto->idPedido) ?></td>
                    <td><?= $this->Number->format($pedidoproducto->idProducto) ?></td>
                    <td><?= $this->Number->format($pedidoproducto->precio) ?></td>
                    <td><?= $this->Number->format($pedidoproducto->cantidad) ?></td>
                    <td><?= h($pedidoproducto->estado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pedidoproducto->idPedido]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pedidoproducto->idPedido]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pedidoproducto->idPedido], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidoproducto->idPedido)]) ?>
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

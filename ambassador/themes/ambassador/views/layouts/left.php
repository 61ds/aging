<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>



        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'All Startups', 'icon' => 'fa fa-angle-right', 'url' => ['startup/index'],'active' => ($this->context->route == 'startup/index' || $this->context->route == 'startup/view' )],

                    ['label' => 'All Sponsorships', 'icon' => 'fa fa-angle-right', 'url' => ['sponsorship/index'],'active' => ($this->context->route == 'sponsorship/index' || $this->context->route == 'sponsorship/view')],

                    ['label' => 'All Revenues', 'icon' => 'fa fa-angle-right', 'url' => ['revenues/index'],'active' => ($this->context->route == 'revenues/index' || $this->context->route == 'revenues/view')],

                    ['label' => 'My profile', 'icon' => 'fa fa-angle-right', 'url' => ['profile/index'],'active' => ($this->context->route == 'profile/index' || $this->context->route == 'profile/update' )],
                    ['label' => 'Change password', 'icon' => 'fa fa-angle-right', 'url' => ['profile/change-password'],'active' => ($this->context->route == 'profile/change-password')],

                ],

            ]
        ) ?>

    </section>

</aside>

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
                    [
                        'label' => 'Location Management',
                        'icon' => 'fa fa-map-marker',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Active Countries', 'icon' => 'fa fa-angle-right', 'url' => ['countries/index'],'active' => ($this->context->route == 'countries/index' || $this->context->route == 'countries/viewstates' || $this->context->route == 'countries/inactive-states' || $this->context->route == 'countries/viewcities' || $this->context->route == 'countries/inactive-cities')],
                            ['label' => 'All Countries', 'icon' => 'fa fa-angle-right', 'url' => ['/countries/all']],
                           ],
                    ],
                    [
                        'label' => 'Chapter Management',
                        'icon' => 'fa fa-book',
                        'url' => '#',
                        'items' => [
                            ['label' => 'All Chapters', 'icon' => 'fa fa-angle-right', 'url' => ['chapters/index'],'active' => ($this->context->route == 'chapters/index')],
                            ['label' => 'Add New Chapter', 'icon' => 'fa fa-angle-right', 'url' => ['chapters/create']],
                        ],
                    ],

                    [
                        'label' => 'User Management',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
							['label' => 'All Users', 'icon' => 'fa fa-file-code-o', 'url' => ['/user/index'],],
                            ['label' => 'Add New Admin', 'icon' => 'fa fa-dashboard', 'url' => ['/user/create'],],
                            ['label' => 'Add New Ambassador', 'icon' => 'fa fa-dashboard', 'url' => ['/user/create-ambassador'],],
                        ],
                    ],
                    [
                        'label' => 'Startups Management',
                        'icon' => 'fa fa-university',
                        'url' => '#',
                        'items' => [
                            ['label' => '', 'icon' => 'fa fa-angle-right', 'url' => ['chapters/index'],'active' => ($this->context->route == 'chapters/index')],
                            ['label' => 'Startup Stages', 'icon' => 'fa fa-angle-right', 'url' => ['company-stage/index']],
                            ['label' => 'Startup Categories', 'icon' => 'fa fa-angle-right', 'url' => ['company-category/index'] ,'active' => ($this->context->route == 'company-category/index' || $this->context->route == 'company-category/create' || $this->context->route == 'company-category/update' || $this->context->route == 'category-choices/index' || $this->context->route ==  'category-choices/create' || $this->context->route == 'category-choices/update')],
                            ['label' => 'Startup Technology', 'icon' => 'fa fa-angle-right', 'url' => ['company-technology/index'] ,'active' => ($this->context->route == 'company-technology/index' || $this->context->route == 'company-technology/create' || $this->context->route == 'company-technology/update')],
                            ['label' => 'Startup Strategies', 'icon' => 'fa fa-angle-right', 'url' => ['company-strategic/index'] ,'active' => ($this->context->route == 'company-strategic/index' || $this->context->route == 'company-strategic/create' || $this->context->route == 'company-strategic/update')],
                            ['label' => 'Hear about Options', 'icon' => 'fa fa-angle-right', 'url' => ['hear-about/index'] ,'active' => ($this->context->route == 'hear-about/index' || $this->context->route == 'hear-about/create' || $this->context->route == 'hear-about/update')],
                        ],
                    ],

					/*['label' => 'Menu Management', 'icon' => 'fa fa-bars', 'url' => ['/menu'],'active' => ($this->context->route == 'admin/menu/index'),],

					[   'label' => 'Website Settings',
                        'icon' => 'fa fa-cogs',
                        'url' => ['/setting-attributes/globalsetting'],
                        	
					],  
					*/

					
                ],
				
            ]
        ) ?>

    </section>

</aside>

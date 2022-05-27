<div class="ec-left-sidebar ec-bg-sidebar">
    <div id="sidebar" class="sidebar ec-sidebar-footer">
        <div class="ec-brand">
            <a href="index.html">
                <img src="{{ asset ('imgs/theme/logo.svg') }}" alt="" style="width: 250px; height: 250px">
            </a>
        </div>
        <div class="ec-navigation" data-simplebar>
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="{{ Route::currentRouteName() == 'super.admin' ? 'active' : ''}}">
                    <a class="sidenav-item-link" href="{{ route('super.admin') }}"> <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Tableau de bord</span>
                    </a>
                    <hr>
                </li>

                <li class="{{ Route::currentRouteName() == 'admin.utilisateurs' || Route::currentRouteName() == 'admin.detail.utilisateurs' ? 'active' : ''}}">
                    <a class="sidenav-item-link" href="{{ route('admin.utilisateurs') }}"><i class="mdi mdi-account-group"></i> 
                        <span class="nav-text">Utilisateurs</span>
                    </a>
                </li>

                <li class="{{ Route::currentRouteName() == 'admin.agents.commerciaux' || Route::currentRouteName() == 'admin.detail.agent.commercial' ? 'active' : ''}}">
                    <a class="sidenav-item-link" href="{{ route('admin.agents.commerciaux') }}"><i class="mdi mdi-account-group-outline"></i> 
                        <span class="nav-text">Agents Commerciaux</span>
                    </a>
                </li>

                <li class="{{ Route::currentRouteName() == 'admin.categorie' || Route::currentRouteName() == 'admin.sous.categorie' ? 'active' : ''}} has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)"><i class="mdi mdi-dns-outline"></i> 
                            <span class="nav-text">Categories</span> <b class="caret"></b>
                        </a>
                    <div class="collapse {{ Route::currentRouteName() == 'admin.categorie' || Route::currentRouteName() == 'admin.sous.categorie' ? 'show' : ''}}">
                        <ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{ route('admin.categorie') }}">
                                    <span class="nav-text">Principales Categories</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('admin.sous.categorie') }}">
                                    <span class="nav-text">Sous - Categorie</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="{{ Route::currentRouteName() == 'admin.ajouter.produit' || Route::currentRouteName() == 'admin.produits' || Route::currentRouteName() == 'admin.detail.produit' ? 'active' : ''}} has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)"><i class="mdi mdi-palette-advanced"></i> 
                            <span class="nav-text">Products</span> <b class="caret"></b>
                        </a>
                    <div class="collapse {{ Route::currentRouteName() == 'admin.ajouter.produit' || Route::currentRouteName() == 'admin.produits' || Route::currentRouteName() == 'admin.detail.produit' ? 'show' : ''}}">
                        <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{ route('admin.ajouter.produit') }}">
                                    <span class="nav-text">Ajouter un produit</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('admin.produits') }}">
                                    <span class="nav-text">Liste des Produits</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="{{ route ('admin.detail.produit' , ['id_produit'=>1])}}">
                                    <span class="nav-text">Product Detail</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="{{ Route::currentRouteName() == 'admin.ajout.commande' || Route::currentRouteName() == 'admin.historique.Commande' || Route::currentRouteName() == 'admin.detailCommande' || Route::currentRouteName() == 'admin.invoice' ? 'active' : ''}} has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)"><i class="mdi mdi-cart"></i> 
                            <span class="nav-text">Commandes</span> <b class="caret"></b>
                        </a>
                    <div class="collapse {{ Route::currentRouteName() == 'admin.ajout.commande' || Route::currentRouteName() == 'admin.historique.Commande' || Route::currentRouteName() == 'admin.detailCommande' || Route::currentRouteName() == 'admin.invoice' ? 'show' : ''}}">
                        <ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{ route('admin.ajout.commande') }}">
                                    <span class="nav-text">Nouvelle Commande</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('admin.historique.Commande') }}">
                                    <span class="nav-text">Historique Commandes</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('admin.detailCommande') }}">
                                    <span class="nav-text">Order Detail</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('admin.invoice') }}">
                                    <span class="nav-text">Invoice</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="{{ Route::currentRouteName() == 'admin.reviews' ? 'active' : ''}}">
                    <a class="sidenav-item-link" href="{{ route('admin.reviews') }}"><i class="mdi mdi-star-half"></i> 
                        <span class="nav-text">Reviews</span>
                    </a>
                </li>

                <li class="{{ Route::currentRouteName() == 'admin.brand' ? 'active' : ''}}">
                    <a class="sidenav-item-link" href="{{ route('admin.brand') }}"><i class="mdi mdi-tag-faces"></i> 
                        <span class="nav-text">Brands</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
</div>
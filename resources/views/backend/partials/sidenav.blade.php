<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            @if(auth()->user()->role=='author')
                            <a class="nav-link" href="{{route('admin.dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="{{route('dashboard.author-profile')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Profile 
                            </a>
                            <a class="nav-link" href="{{route('dashboard.write-book')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Write Books
                            </a>
                            <a class="nav-link" href="{{route('dashboard.publish-book')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Publish Book
                            </a>
                            <a class="nav-link" href="{{route('dashboard.author-add-book')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Add Book 
                            </a>
                            <a class="nav-link" href="{{route('dashboard.authorlibrary')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                My Library
                            </a>

                            @endif
                            @if(auth()->user()->role=='admin')
                            <a class="nav-link" href="{{route('admin.dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">User</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Author
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('dashboard.authorrequest')}}">Author Request</a>
                                    <a class="nav-link" href="{{route('dashboard.authorlist')}}">Author List</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Reader
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('dashboard.readerlist')}}">All Reader List </a>
                                    <a class="nav-link" href="{{route('dashboard.subscribed-readerlist')}}">Subscripted Reader</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Ebook
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Publish Book
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="{{route('dashboard.addebook')}}">Add Ebook </a>
                                            
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Ebook List
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="{{route('dashboard.ebook-list')}}">All Ebooks</a>
                                            <a class="nav-link" href="{{route('dashboard.ebook-list.inserted')}}">Inserted Ebooks</a>
                                            <a class="nav-link" href="{{route('dashboard.ebook-list.author')}}">Author Ebooks</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">list </div>
                            <a class="nav-link" href="{{route('dashboard.admininfo')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Admin Info 
                            </a>
                            <a class="nav-link" href="{{route('dashboard.subscription.info')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Subscription Info
                            </a>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Report
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Business setup
                            </a>
                        </div>
                    </div>
                    @endif
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{auth()->user()-> name}}
                    </div>
                </nav>
            </div>
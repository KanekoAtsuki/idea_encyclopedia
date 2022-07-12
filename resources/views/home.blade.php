<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - &quot;Google Drive&quot; design</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="{{asset('css/Home.css')}}">

</head>

<body>
    <!-- partial:index.partial.html -->
    <header class="container-fluid">
        <div class="row top-row">
            <div class="col-xs-1">
                <a class="logo"><i class="fa fa-file" aria-hidden="true"></i></a>
            </div>
            <div class="col-xs-10">
                <form class="search-form">
                    <label class="search-icon" for="search"><i class="fa fa-lg fa-search"></i></label>
                    <input type="text" class="search-input" placeholder="In Dateien suchen.." id="search" />
                </form>
            </div>
            <div class="col-xs-1 text-right">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </header>
    <div class="main container-fluid">
        <div class="row">
            <div class="col-xs-4 col-md-2 menu">
                <nav>
                    <ul>
                        <li><a href="javascript:void()" class="active"><i class="fa fa-file" aria-hidden="true"></i>
                                Meine Dateien</a></li>
                        <li><a href="javascript:void()"><i class="fa fa-clock-o" aria-hidden="true"></i> Zuletzt</a>
                        </li>
                        <li><a href="javascript:void()"><i class="fa fa-star" aria-hidden="true"></i> Markiert</a></li>
                        <li><a href="javascript:void()"><i class="fa fa-picture-o" aria-hidden="true"></i> Fotos</a>
                        </li>
                        <li><a href="javascript:void()"><i class="fa fa-users" aria-hidden="true"></i> Freigegeben</a>
                        </li>
                        <li class="trenner"><a href="javascript:void()"><i class="fa fa-hdd-o" aria-hidden="true"></i>
                                Backup</a></li>
                        <li class="trenner"><a href="javascript:void()"><i class="fa fa-cog" aria-hidden="true"></i>
                                Einstellungen</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-xs-8 col-md-8 main-content">
                <div class="row">
                    <div class="col-md-3">
                        <a class="card" href="memo">
                            <div class="card-header google">
                                <i class="fa fa-file-text" aria-hidden="true"></i>
                            </div>
                            <div class="card-content">
                                <h2>メモフォーム</h2>
                                <p>Sehen Sie sich hier Ihre Notizen an.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a class="card">
                            <div class="card-header icloud">
                                <i class="fa fa-paint-brush" aria-hidden="true"></i>
                            </div>
                            <div class="card-content">
                                <h2>お絵描きフォーム</h2>
                                <p>Ihre iCloud Drive Dateien hier anzeigen.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a class="card">
                            <div class="card-header onedrive">
                                <i class="fa fa-windows card-icon" aria-hidden="true"></i>
                            </div>
                            <div class="card-content">
                                <h2>OneDrive</h2>
                                <p>Ihre OneDrive Dateien hier anzeigen.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a class="card">
                            <div class="card-header dropbox">
                                <i class="fa fa-dropbox card-icon" aria-hidden="true"></i>
                            </div>
                            <div class="card-content">
                                <h2>Dropbox</h2>
                                <p>Ihre Dropbox Dateien hier anzeigen.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12">
                        <h2 class="server-name">FTP-Name</h2>
                        <div class="row file-legend">
                            <div class="col-xs-7">
                                Name
                            </div>
                            <div class="col-xs-3 text-center">
                                Geändert am
                            </div>
                            <div class="col-xs-2 text-center">
                                Dateigröße
                            </div>
                        </div>
                        <div class="files">
                            <div class="file-row">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <i class="fa fa-folder file-icon" aria-hidden="true"></i> Testordner 1
                                    </div>
                                    <div class="col-xs-3 text-center">
                                        12.04.17
                                    </div>
                                    <div class="col-xs-2 text-center">
                                        -
                                    </div>
                                </div>
                            </div>
                            <div class="file-row">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <i class="fa fa-folder file-icon" aria-hidden="true"></i> Testordner 2
                                    </div>
                                    <div class="col-xs-3 text-center">
                                        12.04.17
                                    </div>
                                    <div class="col-xs-2 text-center">
                                        -
                                    </div>
                                </div>
                            </div>
                            <div class="file-row">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <i class="fa fa-folder file-icon" aria-hidden="true"></i> Testordner 3
                                    </div>
                                    <div class="col-xs-3 text-center">
                                        12.04.17
                                    </div>
                                    <div class="col-xs-2 text-center">
                                        -
                                    </div>
                                </div>
                            </div>
                            <div class="file-row">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <i class="fa fa-folder file-icon" aria-hidden="true"></i> Testordner 4
                                    </div>
                                    <div class="col-xs-3 text-center">
                                        12.04.17
                                    </div>
                                    <div class="col-xs-2 text-center">
                                        -
                                    </div>
                                </div>
                            </div>
                            <div class="file-row">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <i class="fa fa-file-pdf-o file-icon" aria-hidden="true"></i> Testdokument 1.pdf
                                    </div>
                                    <div class="col-xs-3 text-center">
                                        12.04.17
                                    </div>
                                    <div class="col-xs-2 text-center">
                                        1.5mb
                                    </div>
                                </div>
                            </div>
                            <div class="file-row">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <i class="fa fa-file-pdf-o file-icon" aria-hidden="true"></i> Testdokument 2.pdf
                                    </div>
                                    <div class="col-xs-3 text-center">
                                        12.04.17
                                    </div>
                                    <div class="col-xs-2 text-center">
                                        2.1mb
                                    </div>
                                </div>
                            </div>
                            <div class="file-row">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <i class="fa fa-file-pdf-o file-icon" aria-hidden="true"></i> Testdokument 3.pdf
                                    </div>
                                    <div class="col-xs-3 text-center">
                                        12.04.17
                                    </div>
                                    <div class="col-xs-2 text-center">
                                        1.9mb
                                    </div>
                                </div>
                            </div>
                            <div class="file-row">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <i class="fa fa-file-pdf-o file-icon" aria-hidden="true"></i> Testdokument 4.pdf
                                    </div>
                                    <div class="col-xs-3 text-center">
                                        12.04.17
                                    </div>
                                    <div class="col-xs-2 text-center">
                                        5.7mb
                                    </div>
                                </div>
                            </div>
                            <div class="file-row">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <i class="fa fa-file-image-o file-icon" aria-hidden="true"></i> Testbild 1.jpg
                                    </div>
                                    <div class="col-xs-3 text-center">
                                        12.04.17
                                    </div>
                                    <div class="col-xs-2 text-center">
                                        15.7mb
                                    </div>
                                </div>
                            </div>
                            <div class="file-row">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <i class="fa fa-file-image-o file-icon" aria-hidden="true"></i> Testbild 2.jpg
                                    </div>
                                    <div class="col-xs-3 text-center">
                                        12.04.17
                                    </div>
                                    <div class="col-xs-2 text-center">
                                        7.8mb
                                    </div>
                                </div>
                            </div>
                            <div class="file-row">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <i class="fa fa-file-image-o file-icon" aria-hidden="true"></i> Testbild 3.jpg
                                    </div>
                                    <div class="col-xs-3 text-center">
                                        12.04.17
                                    </div>
                                    <div class="col-xs-2 text-center">
                                        8.1mb
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 sidebar">
                <h2>Ablage</h2>
                <p><a href="javascript:void(0)" class="blue-btn"><i class="fa fa-upload" aria-hidden="true"></i>
                        Hochladen</a></p>
                <p><a href="javascript:void(0)" class="white-btn"><i class="fa fa-file-o" aria-hidden="true"></i> Neue
                        Datei</a></p>
                <p><a href="javascript:void(0)" class="white-btn"><i class="fa fa-folder-open-o" aria-hidden="true"></i>
                        Neuer Ordner</a></p>
                <br>
                <h2>Informationen</h2>
                <div class="info">
                    <a href="javascript:void(0)" class="info-link info-active-link">
                        <h3>Services</h3>
                    </a>
                    <a href="javascript:void(0)" class="info-link">
                        <h3>Aktivität</h3>
                    </a>
                </div>
                <br>
                <p><a href="javascript:void(0)" class="white-btn"><i class="fa fa-google" aria-hidden="true"></i> Google
                        Drive</a></p>
                <p><a href="javascript:void(0)" class="white-btn"><i class="fa fa-cloud" aria-hidden="true"></i> iCloud
                        Drive</a></p>
                <p><a href="javascript:void(0)" class="white-btn"><i class="fa fa-windows" aria-hidden="true"></i>
                        OneDrive</a></p>
                <p><a href="javascript:void(0)" class="white-btn"><i class="fa fa-dropbox" aria-hidden="true"></i>
                        Dropbox</a></p>
                <p><a href="javascript:void(0)" class="white-btn"><i class="fa fa-files-o" aria-hidden="true"></i>
                        FTP-Server</a></p>
            </div>
        </div>
    </div>
    <!-- partial -->

</body>

</html>

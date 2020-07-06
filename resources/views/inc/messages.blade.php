@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <header id="header_2">
            <!--kode top bar start-->
                <div class="top_bar_2">
                    <div class="modal-fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="user-box">
                                    {{$error}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </header>
    @endforeach
@endif

@if (session('success'))
    <header id="header_2">
        <!--kode top bar start-->
            <div class="top_bar_2">
                <div class="modal-fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="user-box">
                                {{session('success')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
@endif

@if (session('error'))
    <header id="header_2">
        <!--kode top bar start-->
            <div class="top_bar_2">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="user-box">
                            {{session('error')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endif
@section('content')
    <div class="posts">
        @if (Auth::check())
            <div class="nav post">
                <form method="POST" style="margin:auto;">
                    <input class="form-fields" style="padding:6px 0px 6px 6px;margin:0px 0px 10px 0px;width: 60%;" id="title" name="title" type="text" value="" size="30" maxlength="255" placeholder="Título" required>
                    <textarea class="form-fields" style="height:80px;padding:3px 0px 3px 6px;margin:0px 0px 10px 0px;" id="content" name="content" cols="45" rows="5" maxlength="65525" placeholder="Escreva aqui o comentário..." required="required"></textarea><br>
                    <input type="submit" class="bt-style bt-form bt-post" name="postar" id="postar" value="Postar" title="Postar">
                </form>
            </div>
        @endif
        <h1 style="text-align:center;color:#2d3034;padding:20px 0px;font-weight:bold;">Blog</h1>
        @foreach($postagens as $post)
            <div class="posting">
                <div id="dadosUsuario" style="display:grid;grid-template-columns:100%;">
                    <div style="width:100%;">
                    <div style="margin:auto;width:70%">
                        @foreach($usuarios as $user)
                        @if ($user->id_usuario == $post->id_usuario)
                            <img style="margin-top:40px;margin-bottom:10px;" src="{{ $user->imagem }}" width="100%" >
                        @endif
                        @endforeach      
                    </div>
                    <h5 style="text-align:center;">
                        @foreach($usuarios as $user)
                        @if ($user->id_usuario == $post->id_usuario)
                            {{ $user->username }}
                        @endif
                        @endforeach
                    </h5>
                    </div>
                </div>

                <div id="conteudoPosting">
                    <h1>{{ $post->title }}</h1>
                    <p>{!! $post->content !!}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
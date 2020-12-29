   @if(count($errors)>0)
                            <div class="tt">
                            @foreach($errors->all() as $err)
                                {{ $err->first('') }}<br>
                                @endforeach
                            </div>
                            @endif
                            @if(session('thongbao'))
                                
                                    {{session('thongbao')}}
                              
                            @endif
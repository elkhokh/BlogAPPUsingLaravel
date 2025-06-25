
{{-- @props(['title','subtitle']) --}}
            <div class="post-preview">
                        <a href="{{ 'post' }}">
                            <h2 class="post-title">{{$title}}</h2>
                            <h3 class="post-subtitle">{{$subtitle}}</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">{{ $create_name }}</a>
                            {{ $created_at }}
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />


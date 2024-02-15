<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
    {{$name}}
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{$title}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{$text}}
            </div>
            <div class="modal-footer">
                {{$slot}}

            </div>
        </div>
    </div>
</div>


<div class="home-Page_content comparison_results mt-4">
    <form class="modal-content"  method="post" enctype="multipart/form-data" id="export-compare">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{__('kết thúc đối chiếu')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="comparison-success">
                    <div class="file-name-error">
                        <h6><b> {{__('Tên file')}}</b></h6>
                        <div class="content-success">
                            <label for="form-controller" class="file-name-comparison-error"></label>
                            <h6>にはエラーはありません。</h6>
                            <span> <b> {{__('Sẽ Export PDF đã check nhé')}} </b></span>
                        </div>                       
                    </div>
                </div>
                <div class="comparison-error">
                    <dib class="file-name-error">
                        <h6><b> {{__('Tên file')}}</b></h6>
                    </dib>
                    <div class="content-error">
                        <label for="form-controller" class="file-name-comparison-error"></label>
                        <h6><b>{{__('Các Item sau không match')}}</b></h6>
                        <ul class="list-error">
                            <li class="data_type"></li>
                            <br>
                            <li>
                                <b>
                                {{__('Sẽ Export PDF đã check nhé')}}
                                </b>                     
                            </li>
                        </ul>
                    </div> 
                </div>
       
            </div>
            <div class="modal-footer compare">
                <button type="submit" class="btn btn-primary float-left btn-export-compare">{{__('Yes')}}</button>
                <button type="button" class="btn btn-primary btn-back-top">{{__('No')}}</button>
            </div>
        </div>
    </form>
</div>


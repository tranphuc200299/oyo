<div class="home-Page_content automatic mb-4 mt-4">
    <div class="modal-content" method="post"  enctype="multipart/form-data" id="form_compare">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">自動照合開始 </h5>
                <input type="hidden" value="" name="survey_type" class="survey_type_compare">
                <input type="hidden"  name="file" class="file_compare">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th>{{__('FileName')}}</th>
                        <td class="fileName"></td>
                    </tr>
                    <tr>
                        <th>{{__('Survey subject')}}</th>
                        <td class="survey_subject"></td>
                    </tr>
                    <tr>
                        <th>
                            {{__('Samples')}}
                        </th>
                        <td>
                            <div class="samples">

                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="col-12">
                        <label for="form-controll"><b>{{__('Bạn có muốn bắt đầu kiểm tra không')}}</b></label>
                    </div>
            </div>
            <div class="modal-footer automatic">
                <button type="button" class="btn btn-primary float-left automatic-back">{{__('No')}}</button>
                <button type="button" class="btn btn-primary btn-show-compare-next btn-save">{{(__('OK'))}}</button>
            </div>
        </div>
    </div>
</div>

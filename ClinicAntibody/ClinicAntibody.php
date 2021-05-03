    <div class="card">
        <div class="card-header">
            <div class="row align-items-center"></div>
        </div>
        <div class="card-body">
            <form>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group" id="details">
                                <div class="form-check form-check-inline">
                                    <h1 class="text-muted mb-4">
                                        ผลการตรวจ SARS-CoV-2 Antibody
                                    </h1>
                                </div>

                                <div class="container">
                                    <div class="row clearfix">
                                        <div class="col-md-12 table-responsive">
                                            <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">ครั้งที่</th>
                                                        <th class="text-center">วันที่เก็บ</th>
                                                        <th class="text-center">ชนิดตัวอย่าง</th>
                                                        <th class="text-center">
                                                            สถานที่ส่งตรวจ
                                                        </th>
                                                        <th class="text-center">ผลตรวจ</th>
                                                        <th class="text-center" style="
                                          border-top: 1px solid #ffffff;
                                          border-right: 1px solid #ffffff;
                                        "></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr id="addr0" data-id="0" class="hidden">
                                                        <td data-name="session">
                                                            <input type="text" name="session0" placeholder="ครั้งที่" class="form-control" />
                                                        </td>
                                                        <td data-name="date">
                                                            <input type="text" name="date0" placeholder="วันที่เก็บ" class="form-control" />
                                                        </td>
                                                        <td data-name="sample">
                                                            <textarea name="sample0" placeholder="ชนิดตัวอย่าง" class="form-control"></textarea>
                                                        </td>
                                                        <td data-name="place">
                                                            <textarea name="place0" placeholder="สถานที่ส่งตรวจ" class="form-control"></textarea>
                                                        </td>
                                                        <td data-name="sel">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox" id="detect" value="option1" />
                                                                <label class="form-check-label" for="detect">Detected</label>
                                                            </div>
                                                        </td>
                                                        <td data-name="del">
                                                            <button name="del0" class="btn btn-danger glyphicon glyphicon-remove row-remove">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-outline-primary" name="submit_insert_general" value="เพิ่มข้อมูล" />
                                    <a id="add_row" class="btn btn-outline-success">เพิ่มตาราง</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
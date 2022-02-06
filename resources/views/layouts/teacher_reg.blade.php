<!-- Alternative Style -->
<!-- Recent Orders -->
<div class="block block-rounded">
    <div class="block-header block-header-default">
        <h3 class="block-title">Teacher registration</h3>
    </div>
    <div class="block-content">
        <form action="" method="POST" onsubmit="return false;">
            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="form-group">
                        <label for="example-text-input-alt">First name</label>
                        <input type="text" class="form-control form-control-alt" id="example-text-input-alt"
                               name="example-text-input-alt" placeholder="Text Input">
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="form-group">
                        <label for="example-text-input-alt">Middle name</label>
                        <input type="text" class="form-control form-control-alt" id="example-text-input-alt"
                               name="example-text-input-alt" placeholder="Text Input">
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="form-group">
                        <label for="example-text-input-alt">Last name</label>
                        <input type="text" class="form-control form-control-alt" id="example-text-input-alt"
                               name="example-text-input-alt" placeholder="Text Input">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="form-group">
                        <label class="d-block">Gender</label>
                        <div class="custom-control custom-radio custom-control-inline custom-control-lg">
                            <input type="radio" class="custom-control-input" id="example-rd-custom-inline-lg1"
                                   name="example-rd-custom-inline-lg" checked>
                            <label class="custom-control-label" for="example-rd-custom-inline-lg1">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline custom-control-lg">
                            <input type="radio" class="custom-control-input" id="example-rd-custom-inline-lg2"
                                   name="example-rd-custom-inline-lg">
                            <label class="custom-control-label" for="example-rd-custom-inline-lg2">Female</label>
                        </div>


                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="form-group">
                        <label for="example-text-input-alt">Date of Birth</label>
                        <input type="text" class="js-datepicker form-control form-control-alt" id="example-datepicker1"
                               name="example-datepicker1" data-week-start="1" data-autoclose="true"
                               data-today-highlight="true" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy">
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="form-group">
                        <label>Nationality</label>
                        <select class="custom-select" id="example-select-custom" name="example-select-custom">
                            <option value="1">Ugandan</option>
                            <option value="2">Kenyan</option>
                            <option value="3">Tanzanian</option>
                            <option value="4">Rwandese</option>

                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="form-group">
                        <label for="entry-level">Subjects taught</label>
                        <select class="custom-select" id="entry-level" name="entry-level">
                            @foreach(\App\Helpers\Subjects::subjects() as $subject)
                                <option value="1"></option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="form-group">
                        <label for="entry-level">Grade</label>
                        <select class="custom-select" id="entry-level" name="entry-level">
                            <option value="1">First</option>
                            <option value="2">Second</option>
                            <option value="4">Third</option>
                            <option value="4">Forth</option>
                            <option value="4">Other</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-4 col-xl-4">
                    <div class="form-group">
                        <label for="example-text-input-alt">Aggregates</label>
                        <input type="number" class="form-control form-control-alt" id="example-text-input-alt"
                               name="example-text-input-alt" placeholder="Text Input">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="form-group">
                        <label for="example-text-input-alt">Former school</label>
                        <input type="text" class="form-control form-control-alt" id="example-text-input-alt"
                               name="example-text-input-alt" placeholder="Text Input">
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="form-group">
                        <label for="example-text-input-alt">Home address</label>
                        <input type="text" class="form-control form-control-alt" id="example-text-input-alt"
                               name="example-text-input-alt" placeholder="Text Input">
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="form-group">
                        <label class="d-block">Under control of</label>
                        <div class="custom-control custom-radio custom-control-inline custom-control-lg">
                            <input type="radio" class="custom-control-input" id="parent"
                                   name="example-rd-custom-inline-lg" checked>
                            <label class="custom-control-label" for="parent">Parent</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline custom-control-lg">
                            <input type="radio" class="custom-control-input" id="guardian"
                                   name="example-rd-custom-inline-lg">
                            <label class="custom-control-label" for="guardian">Guardian</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="form-group">
                        <label for="example-text-input-alt">Guardian name</label>
                        <input type="text" class="form-control form-control-alt" id="example-text-input-alt"
                               name="example-text-input-alt" placeholder="Text Input">
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="form-group">
                        <label for="example-text-input-alt">Guardian contact</label>
                        <input type="tel" class="form-control form-control-alt" id="example-text-input-alt"
                               name="example-text-input-alt" placeholder="Text Input">
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="form-group">
                        <label for="example-text-input-alt">Guardian address</label>
                        <input type="text" class="form-control form-control-alt" id="example-text-input-alt"
                               name="example-text-input-alt" placeholder="Text Input">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="form-group">
                        <label for="example-text-input-alt">Parent name</label>
                        <input type="text" class="form-control form-control-alt" id="example-text-input-alt"
                               name="example-text-input-alt" placeholder="Text Input">
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="form-group">
                        <label for="example-text-input-alt">Parent contact</label>
                        <input type="tel" class="form-control form-control-alt" id="example-text-input-alt"
                               name="example-text-input-alt" placeholder="Text Input">
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="form-group">
                        <label for="example-text-input-alt">Parent address</label>
                        <input type="text" class="form-control form-control-alt" id="example-text-input-alt"
                               name="example-text-input-alt" placeholder="Text Input">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-lg btn-alt-success mr-1 mb-3">
                        <i class="fa fa-fw fa-plus mr-1"></i> Add Student
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>
<!-- END Recent Orders -->


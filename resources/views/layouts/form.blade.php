<div class="block block-rounded combination sections">
    <div class="block-header">
        <h3 class="block-title">A level subject combinations</h3>
    </div>
    <div class="block-content">
        <div class="row">
            <?php    use App\Helpers\Clean;use App\Helpers\Init;use App\Helpers\Operation;use App\Helpers\Subjects;
            ?>
            <div class="col">
                <!-- Validation Wizard 2 -->
                <div class="js-wizard-validation2 block block" id="rootwizard">
                    <!-- Step Tabs -->
                    <ul class="nav nav-tabs nav-tabs-alt nav-justified" role="tablist">
                        {{--                        <li class="nav-item">--}}
                        {{--                            <a class="nav-link active" href="#wizard-validation2-step1" data-toggle="tab">1. Bio data</a>--}}
                        {{--                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link" href="#wizard-validation2-step2" data-toggle="tab">1. Subjects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#wizard-validation2-step3" data-toggle="tab">2. PLE Results</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#wizard-validation2-step4" data-toggle="tab">3. UCE Results</a>
                        </li>
                    </ul>
                    <!-- END Step Tabs -->

                    <!-- Form -->
                    <form class="js-wizard-validation2-form" id="combination-form" method="post" action="{{route('combinations')}}">
                        <!-- Steps Content -->
                        <div class="block-content block-content-full tab-content px-md-5" style="min-height: 303px;">
                        @csrf
                        <!-- Step 1 -->
                        {{--                            <div class="tab-pane active" id="wizard-validation2-step1" role="tabpanel">--}}
                        {{--                                <?php--}}
                        {{--                                $candidate = Candidate::where('user_id', Auth::user()->id)->first();--}}
                        {{--                                ?>--}}
                        {{--                                <div class="row">--}}
                        {{--                                    <div class="col-lg-4 col-xl-4">--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            <label for="fname">First name</label>--}}
                        {{--                                            <input type="text" class="form-control form-control-alt" id="fname"--}}
                        {{--                                                   name="biodata[fname]" placeholder="Your first name"--}}
                        {{--                                                   value=" {{ucfirst($candidate->fname)}}">--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="col-lg-4 col-xl-4">--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            <label for="mname">Middle name</label>--}}
                        {{--                                            <input type="text" class="form-control form-control-alt" id="mname"--}}
                        {{--                                                   name="biodata[mname]" placeholder="Your middle name"--}}
                        {{--                                                   value="{{ucfirst($candidate->mname)}}">--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="col-lg-4 col-xl-4">--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            <label for="lname">Last name</label>--}}
                        {{--                                            <input type="text" class="form-control form-control-alt" id="lname"--}}
                        {{--                                                   name="biodata[lname]" placeholder="Your last name"--}}
                        {{--                                                   value="{{ucfirst($candidate->lname)}}">--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="row">--}}
                        {{--                                    <div class="col-lg-4 col-xl-4">--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            <label class="d-block">Gender</label>--}}
                        {{--                                            <div class="custom-control custom-radio custom-control-inline custom-control-lg">--}}
                        {{--                                                <input type="radio" class="custom-control-input"--}}
                        {{--                                                       id="gender-male"--}}
                        {{--                                                       name="biodata[gender]" <?php--}}
                        {{--                                                       if (strtolower($candidate->gender) == 'male') {--}}
                        {{--                                                           echo 'checked';--}}
                        {{--                                                       }--}}
                        {{--                                                       if (strtolower($candidate->gender) == '') {--}}
                        {{--                                                           echo 'checked';--}}
                        {{--                                                       }--}}
                        {{--                                                       ?> value="Male">--}}
                        {{--                                                <label class="custom-control-label"--}}
                        {{--                                                       for="gender-male">Male</label>--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="custom-control custom-radio custom-control-inline custom-control-lg">--}}
                        {{--                                                <input type="radio" class="custom-control-input"--}}
                        {{--                                                       id="gender-female"--}}
                        {{--                                                       name="biodata[gender]" value="Female"--}}
                        {{--                                                <?php--}}
                        {{--                                                    if (strtolower($candidate->gender) == 'female') {--}}
                        {{--                                                        echo 'checked';--}}
                        {{--                                                    }--}}
                        {{--                                                    ?>--}}

                        {{--                                                >--}}
                        {{--                                                <label class="custom-control-label"--}}
                        {{--                                                       for="gender-female">Female</label>--}}
                        {{--                                            </div>--}}


                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="col-lg-4 col-xl-4">--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            @php($date=empty($candidate->dob)?'':\App\Helpers\Utilities::normalDate($candidate->dob))--}}
                        {{--                                            <label for="dob">Date of Birth</label>--}}
                        {{--                                            <input type="text" class="js-datepicker form-control form-control-alt"--}}
                        {{--                                                   id="dob"--}}
                        {{--                                                   name="biodata[dob]" data-week-start="1" data-autoclose="true"--}}
                        {{--                                                   data-today-highlight="true" data-date-format="dd/mm/yyyy"--}}
                        {{--                                                   placeholder="dd/mm/yyyy" value="{{$date}}">--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}

                        {{--                            </div>--}}
                        <!-- END Step 1 -->

                            <!-- Step 2 -->
                            <div class="tab-pane" id="wizard-validation2-step2" role="tabpanel">

                                <div class="form-group">
                                    <label for="select_optionals">UCE optional subjects (Click again to add subject)</label>
                                    {{--                            <textarea class="form-control form-control-alt" id="wizard-validation2-bio"--}}
                                    {{--                                      name="wizard-validation2-bio" rows="7"></textarea>--}}

                                
                                    <select class="js-select-option form-control" id="select_optionals"
                                            name="select_optionals" style="width: 100%;"
                                            data-placeholder="Click to select" multiple>
                                        <option></option>
                                        <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        <?php

                                        foreach (Subjects::options() as $subject) {

                                        ?>
                                        <option value="<?php
                                        echo $subject;
                                        ?>"
                                        <?php

                                            if (in_array($subject, Subjects::fetch_options())) {
                                                echo 'selected';
                                            }

                                            ?>

                                        ><?php echo strtoupper(Clean::removeSymbols($subject)); ?></option>

                                        <?php
                                        }

                                        ?>

                                    </select>
                                </div>

                            </div>
                            <!-- END Step 2 -->

                            <!-- Step 3 -->
                            <div class="tab-pane" id="wizard-validation2-step3" role="tabpanel">
                                <div class="row">
                                    <div class="col">
                                        <label class="d-block mb-2">PLE Results</label>
                                    </div>
                                </div>
                                <?php
                                $pleResults = Init::pleResults();
                                ?>
                                <div class="row">
                                    <div class="col-lg-3 col-xl-3">
                                        <div class="form-group">
                                            <label for="grades">MATHEMATICS</label>
                                            <select class="custom-select form-control-alt" id="grades"
                                                    name="ple[maths]">
                                                <?php
                                                foreach (Subjects::grades() as $k=>$v) {
                                                ?>
                                                <option value="<?php echo $v ?>" <?php
                                                    if ($v == $pleResults->maths) {
                                                        echo 'selected';
                                                    }
                                                    ?>><?php echo $k ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-xl-3">
                                        <div class="form-group">
                                            <label for="example-text-input-alt">SCIENCE</label>
                                            <select class="custom-select" id="grades"
                                                    name="ple[science]">
                                                <?php
                                                foreach (Subjects::grades() as $k=>$v) {
                                                ?>
                                                <option value="<?php echo $v ?>" <?php
                                                    if ($v == $pleResults->science) {
                                                        echo 'selected';
                                                    }
                                                    ?>><?php echo $k ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-xl-3">
                                        <div class="form-group">
                                            <label for="example-text-input-alt">ENGLISH</label>
                                            <select class="custom-select" id="grades"
                                                    name="ple[eng]">
                                                <?php
                                                foreach (Subjects::grades() as $k=>$v) {
                                                ?>
                                                <option value="<?php echo $v ?>" <?php
                                                    if ($v == $pleResults->english) {
                                                        echo 'selected';
                                                    }
                                                    ?>><?php echo $k ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-xl-3">
                                        <div class="form-group">
                                            <label for="example-text-input-alt " class="">SOCIAL STUDIES</label>
                                            <select class="custom-select" id="grades"
                                                    name="ple[sst]">
                                                <?php
                                                foreach (Subjects::grades() as $k=>$v) {
                                                ?>
                                                <option value="<?php echo $v ?>" <?php
                                                    if ($v == $pleResults->sst) {
                                                        echo 'selected';
                                                    }
                                                    ?>><?php echo $k ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane" id="wizard-validation2-step4" role="tabpanel">
                                <div class="row">
                                    <div class="col">
                                        <label class="d-block mb-2">UCE Results</label>
                                    </div>
                                </div>
                                <div class="row" id="uce-results" class="uce-results">
                                    <?php
                                    $count = 0;
                                    //                                    foreach (Subjects::fetch_all() as $key=>$value) {
                                    foreach (Operation::uceSubjectGrade() as $key=>$value) {
                                    //                                    if (!empty($value) and strlen($value) != 0){?>
                                    <div class="col-lg-3 col-xl-3">
                                        <div class="form-group">
                                            <label for="grades-<?php echo $count ?>"><?php echo Clean::removeSymbols($key)?></label>
                                            <select class="custom-select" id="grades-<?php echo $count ?>"
                                                    name="uce[<?php
                                                    //                                                    echo Clean::subject($value);
                                                    echo Clean::subject($key);
                                                    ?>]">
                                                <?php
                                                foreach (Subjects::grades() as $k=>$v) {
                                                ?>
                                                <option value="<?php echo $v ?>"
                                                <?php
                                                    if ($value == $v) {
                                                        echo 'selected';
                                                    }
                                                    ?>
                                                ><?php echo $k  ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <?php
                                    //                                    }
                                    ?>
                                    <?php
                                    $count++;
                                    } ?>
                                </div>
                            </div>
                            <!-- END Step 3 -->
                        </div>
                        <!-- END Steps Content -->

                        <!-- Steps Navigation -->
                        <div class="block-content block-content-sm block-content-full bg-body-light rounded-bottom">
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-alt-primary" data-wizard="prev">
                                        <i class="fa fa-angle-left mr-1"></i> Previous
                                    </button>
                                </div>
                                <div class="col-6 text-right">
                                    <button type="button" class="btn btn-alt-primary" data-wizard="next">
                                        Next <i class="fa fa-angle-right ml-1"></i>
                                    </button>
                                    <button type="submit" class="btn btn-primary d-none" data-wizard="finish">
                                        <i class="fa fa-check mr-1" id="btn-combination"></i> Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- END Steps Navigation -->
                    </form>
                    <!-- END Form -->
                </div>
                <!-- END Validation Wizard 2 -->
            </div>
        </div>
        <!-- END Validation Wizards -->

    </div>
</div>

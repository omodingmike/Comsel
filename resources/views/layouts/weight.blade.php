<div class="block block-rounded weight hide sections">
    <div class="block-header">
        <h3 class="block-title">Result Weight</h3>
    </div>
    <div class="block-content">
        <div class="row">
            <?php    use App\Helpers\Clean;use App\Helpers\Operation;use App\Helpers\Subjects;use App\Models\Candidate;use App\Models\UaceSubjects;use Illuminate\Support\Facades\Auth; ?>
            <div class="col">
                <!-- Validation Wizard 3 -->
                <div class="js-wizard-validation3 block block" id="rootwizard2">
                    <!-- Step Tabs -->
                    <ul class="nav nav-tabs nav-tabs-alt nav-justified" role="tablist">
                        {{--                        <li class="nav-item">--}}
                        {{--                            <a class="nav-link active" href="#wizard-validation3-step1" data-toggle="tab">1. Bio data</a>--}}
                        {{--                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link" href="#wizard-validation3-step2" data-toggle="tab">1. Subjects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#wizard-validation3-step3" data-toggle="tab">2. UCE Results</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#wizard-validation3-step4" data-toggle="tab">3. UACE Results</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#wizard-validation3-step5" data-toggle="tab">4. Course</a>
                        </li>
                    </ul>
                    <!-- END Step Tabs -->

                    <!-- Form -->
                    <form class="js-wizard-validation3-form" id="weight-form" method="post" action="{{route('weights')}}">
                        <!-- Steps Content -->
                        <div class="block-content block-content-full tab-content px-md-5" style="min-height: 303px;">
                        @csrf
                        <!-- Step 1 -->
                            <div class="tab-pane active" id="wizard-validation3-step1" role="tabpanel">

                                <?php
                                $candidate = Candidate::where('user_id', Auth::user()->id)->first();
                                ?>
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

                            </div>
                            <!-- END Step 1 -->

                            <!-- Step 2 -->
                            <div class="tab-pane" id="wizard-validation3-step2" role="tabpanel">
                                <div class="form-group">
                                    <label for="select_optionals">UCE optional subjects (Click again to add subject)</label>
                                    {{--                            <textarea class="form-control form-control-alt" id="wizard-validation2-bio"--}}
                                    {{--                                      name="wizard-validation2-bio" rows="7"></textarea>--}}

                                    <select class="js-select form-control" id="select_optionals_uace"
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

                                        >{{strtoupper(\App\Helpers\Clean::removeSymbols($subject))}}</option>

                                        <?php
                                        }

                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="select_uace_optionals">UACE subject Combination (Click again to add subject)</label>
                                    {{--                            <textarea class="form-control form-control-alt" id="wizard-validation2-bio"--}}
                                    {{--                                      name="wizard-validation2-bio" rows="7"></textarea>--}}

                                    <select class="js-select form-control" id="select_uace_optionals"
                                            name="uace_subjects" style="width: 100%;"
                                            data-placeholder="Click to select" multiple>
                                        <option></option>

                                        <?php
                                        $uaceSubjects = UaceSubjects::where('user_id', '=', Auth::user()->id)->first()->toArray();

                                        foreach (Subjects::allAlevelSubjects() as $subject) {
                                        if (!empty($subject)){

                                        ?>
                                        <option value="<?php
                                        echo $subject;
                                        ?>"
                                        <?php

                                            if (in_array($subject, $uaceSubjects)) {
                                                echo 'selected';
                                            }

                                            ?>

                                        >{{strtoupper(\App\Helpers\Clean::removeSymbols($subject))}}</option>

                                        <?php
                                        }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="uace-subsidiary">UACE subsidiary</label>
                                    {{--                            <textarea class="form-control form-control-alt" id="wizard-validation2-bio"--}}
                                    {{--                                      name="wizard-validation2-bio" rows="7"></textarea>--}}

                                    <select class="js-select form-control" id="uace-subsidiary"
                                            name="uace_subsidiary" style="width: 100%;"
                                            data-placeholder="Click to select" multiple>
                                        <option></option>

                                        <?php

                                        foreach (Subjects::subsidiaries() as $subject) {

                                        ?>
                                        <option value="<?php
                                        echo $subject;
                                        ?>"
                                        <?php

                                            if (in_array($subject, $uaceSubjects)) {
                                                echo 'selected';
                                            }

                                            ?>

                                        >{{strtoupper(\App\Helpers\Clean::removeSymbols($subject))}}</option>

                                        <?php
                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>
                            <!-- END Step 2 -->

                            <!-- Step 3 -->

                            <div class="tab-pane" id="wizard-validation3-step3" role="tabpanel">

                                <div class="row">
                                    <div class="col">
                                        <label class="d-block mb-2">UCE Results</label>
                                    </div>
                                </div>
                                <div class="row" id="uce-results-weight" class="uce-results">
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
                            <!-- Step 3 -->

                            <div class="tab-pane" id="wizard-validation3-step4" role="tabpanel">

                                <div class="row">
                                    <div class="col">
                                        <label class="d-block mb-2">UACE Results</label>
                                    </div>
                                </div>

                                <div class="row" id="uace-results" class="uce-results">
                                    @foreach(\App\Helpers\Subjects::fetchAlevelSubjects() as $key=>$value)
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="a_{{$key}}">{{ucwords(\App\Helpers\Clean::removeAllspecialCharacters
                                                ($key))}}</label>
                                                <select class="custom-select" id="a_{{$key}}" name="uace[{{$key}}]">
                                                    @foreach(\App\Helpers\Subjects::AlevelGrades($key) as $k=>$v)
                                                        <option value="{{$v}}"
                                                                @if($value==$v)
                                                                selected
                                                                @endif

                                                        >{{$k}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane" id="wizard-validation3-step5" role="tabpanel">
                                <div class="row">
                                    <div class="col">
                                        <label class="d-block mb-2">University course</label>
                                    </div>
                                </div>
                                <div class="row" id="">
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="form-group">
                                            <label for="course-select">Select course</label>
                                            <select class="custom-select" id="course-select"
                                                    name="course">
                                                @foreach(\App\Models\Course::allCourses() as $course)
                                                    <option value="{{$course->code}}">{{$course->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Step 4 -->
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

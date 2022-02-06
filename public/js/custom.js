$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.hide').hide();

    $("#select_optionals, #select_optionals_uace,#select_uace_optionals").select2({
        maximumSelectionLength: 3, minimumResultsForSearch: 5, placeholder: function () {
            $(this).data('placeholder');
        }, allowClear: true, formatSelectionTooBig: function (limit) {
            // Callback
            return 'You can only select 3 subjects';
        }
    });
    $("#uace-subsidiary").select2({
        maximumSelectionLength: 1, minimumResultsForSearch: 1, placeholder: function () {
            $(this).data('placeholder');
        }, allowClear: true, formatSelectionTooBig: function (limit) {
            // Callback
            return 'You can only select 3 subjects';
        }
    });

    // $('#combination').on('change', function (e) {
    //     const data = $(this).select2('val');
    //     makeAjaxRequest('POST', '/uce-subjects', data)
    // });
    $('#select_optionals').on('change', function (e) {
        const data = {
            subjects: Object.values($(this).select2('val'))
        };

        let element = $('#uce-results');
        makeAjaxRequest('POST', '/uce-subjects', data, element)
    });
    $('.ignore').on('click', function (e) {
        e.preventDefault();
    });
    $('#select_optionals_uace').on('change', function (e) {
        const data = {
            subjects: Object.values($(this).select2('val'))
        };
        let element = $('#uce-results-weight');
        makeAjaxRequest('POST', '/uce-subjects', data, element)
    });
    $('#select_uace_optionals').on('change', function (e) {
        const data = {
            subjects: Object.values($(this).select2('val'))
        };
        let element = $('#uace-results');
        makeAjaxRequest('POST', '/uace-subjects', data, element)
    });
    $('#uace-subsidiary').on('change', function (e) {
        const data = {
            subjects: Object.values($(this).select2('val'))
        };
        // console.log(data);
        let element = $('#uace-results');
        makeAjaxRequest('POST', '/subsidiary', data, element)
    });

    $('').on('click', function (event) {

    });


    function makeAjaxRequest(method, url, data, element) {
        $.ajax({
            type: method, url: url, data: data, success: function (a, b, c) {
                let values = Object.values(a);
                let keys = Object.keys(a);
                let content = "";
                let count = 1;
                // console.log(keys);

                if (keys.length > 5) {
                    for (let index = 0; index < keys.length; index++) {
                        // if (keys[index].length !== 0 || keys[index].length !== 1) {
                        content += "<div class=\"col-lg-3 col-xl-3\">\n" + "" +
                            "<div class=\"form-group\">\n" + "                                    " +
                            "<label for=\"uce-results-" + count + "\">" + toTitleCase(keys[index]) + "</label>\n" + " " +
                            "<select class=\"custom-select\" id=\"uce-results-" + count + "\"\n" + " " +
                            "name=\"" + "uce[" + removeSpace(keys[index]) + "]" + "\">\n" + "" +
                            "<option value=\"" + 1 + "\"" + select(1, values[index]) + ">D1</option>\n" + " " +
                            "<option value=\"" + 2 + "\"" + select(2, values[index]) + ">D2</option>\n" + "" +
                            "<option value=\"" + 3 + "\"" + select(3, values[index]) + ">C3</option>\n" +
                            " <option value=\"" + 4 + "\"" + select(4, values[index]) + ">C4</option>\n" + " " +
                            "<option value=\"" + 5 + "\"" + select(5, values[index]) + ">C5</option>\n" + " " +
                            "<option value=\"" + 6 + "\"" + select(6, values[index]) + ">C6</option>\n" + " " +
                            " <option value=\"" + 7 + "\"" + select(7, values[index]) + ">P7</option>\n" + " " +
                            "<option value=\"" + 8 + "\"" + select(8, values[index]) + ">P8</option>\n" + " " +
                            "<option value=\"" + 9 + "\"" + select(9, values[index]) + ">F9</option>\n" + " </select>\n" + " </div>\n" + " </div>"
                        // }

                    }

                } else {
                    for (let index = 0; index < keys.length; index++) {
                        switch (keys[index]) {
                            case 'subsidiary_mathematics':
                            case 'subsidiary_ict':
                            case 'general_paper':
                                // console.log(prepareSubjects(values));
                                content += "<div class=\"col-lg-3 col-xl-3\">\n" + "" +
                                    "<div class=\"form-group\">\n" + "                                    " +
                                    "<label for=\"uace-results-" + count + "\">" + toTitleCase(keys[index]) + "</label>\n" + " " +
                                    "<select class=\"custom-select\" id=\"uace-results-sub-" + count + "\"\n" + " " +
                                    "name=\"uace[" + prepareSubjects(keys[index]) + "]\">\n" + "" +
                                    "<option value=\"" + 1 + " \" >D1</option>\n" + " " +
                                    "<option value=\"" + 1 + "  \">D2</option>\n" + "" +
                                    "<option value=\"" + 1 + " \">C3</option>\n" +
                                    " <option value=\"" + 1 + " \">C4</option>\n" + " " +
                                    "<option value=\"" + 1 + " \">C5</option>\n" + " " +
                                    "<option value=\"" + 1 + " \">C6</option>\n" + " " +
                                    " <option value=\"" + 0 + " \">P7</option>\n" + " " +
                                    "<option value=\"" + 0 + " \">P8</option>\n" + " " +
                                    "<option value=\"" + 0 + " \">F9</option>\n" + " </select>\n" + " </div>\n" + " </div>"
                                break;
                            default:
                                content += "<div class=\"col-lg-3 col-xl-3\">\n" + "" +
                                    "<div class=\"form-group\">\n" + "                                    " +
                                    "<label for=\"uace-results-" + count + "\">" + toTitleCase(keys[index]) + "</label>\n" + " " +
                                    "<select class=\"custom-select\" id=\"uace-results-" + count + "\"\n" + " " +
                                    "name=\"uace[" + prepareSubjects(keys[index]) + "]\">\n" + "" +
                                    "<option value=\"6\"" + "" + select(values[index], 6) + ">A</option>\n" + " " +
                                    "<option value=\"5\" " + "" + select(values[index], 5) + ">B</option>\n" + "" +
                                    "<option value=\"4\" " + "" + select(values[index], 4) + ">C</option>\n" +
                                    "<option value=\"3\" " + "" + select(values[index], 3) + ">D</option>\n" + " " +
                                    "<option value=\"2\" " + "" + select(values[index], 2) + ">E</option>\n" + " " +
                                    "<option value=\"1\" " + "" + select(values[index], 1) + ">O</option>\n" + " " +
                                    " <option value=\"0\" " + "" + select(values[index], 0) + ">F</option>\n" + " " +
                                    " </select>\n" + " </div>\n" + " </div>"

                        }

                    }

                    // }
                }

                element.html(content);

            }, error: function (response) {

            }
        });
    }

    function select(count, grade) {
        if (count === grade)
            return 'selected';
        else return '';
    }

    function toTitleCase(str) {
        return str.replace(/\w\S*/g, function (txt) {
            // return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
            return txt.toUpperCase();
        });
    }

    function prepareSubjects(subject) {
        return removeSpace(subject);
    }

    function removeSpace(str) {
        return removeSlash(str).toLowerCase().replace(/\s/g, '_');
    }

    $('.menu-links').on('click', '', function (event) {
        const sections = $('.sections');
        // $('#sidebar').addClass('hide-navbar');
        sections.hide();
        const classList = $(this).attr("class");
        const classListArray = classList.split(" ");
        $("." + classListArray[1]).show();
        event.preventDefault();
    });
    // $('.fa-bars').on('click', function (event) {
    //     $('#sidebar').removeClass('hide-navbar');
    // });

    function removeSlash(str) {
        return str.replace(/\//g, '_');
    }

    /*
            Dark mode
     */
    const DARK_MODE = 'dark';
    const LIGHT_MODE = 'light';
    const THEME = 'mode';

    $('#darkmode-switch').on('click', function (event) {
        let currentMode = localStorage.getItem(THEME);
        localStorage.setItem(
            THEME,
            currentMode === DARK_MODE ? LIGHT_MODE : DARK_MODE
        );
        applyTheme();
        event.preventDefault();
    });


    function applyTheme() {
        let html = document.documentElement;
        let currentMode = localStorage.getItem(THEME);
        if (currentMode === DARK_MODE) {
            html.classList.add(DARK_MODE);
            document.getElementById('darkmode-switch').innerHTML =
                '<i class="fas fa-sun"></i>';
        } else {
            html.classList.remove(DARK_MODE);
            document.getElementById('darkmode-switch').innerHTML =
                '<i class="fas fa-moon"></i>';
        }
    }

    const width = screen.width;
    if (width < 1000) {
        $('.menu-links').attr("data-action", "sidebar_close");
    }

});

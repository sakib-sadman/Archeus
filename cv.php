<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create CV</title>

    <link rel="stylesheet" href="cv.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
    <div class="top">
        <div class="col-md-12 text-center fs-2 logo">ARCHEUS</div>
    </div>
    <br>
    <div class="container mid">
        <div class="cv_head text-center">
            <h2><u>Create Your Own CV</u></h2>
        </div>

        <br>
        <br>

        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h3><u>Basic Information</u></h3>
                </div>
            </div>
            <br>
            <form class="row justify-content-center">
                <div class="col-3"></div>
                <div class="col">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control form-control-sm" id="name" required>
                    <br>
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control form-control-sm" id="email" required>
                    <br>
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" class="form-control form-control-sm" id="phone" required>
                    <br>
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control form-control-sm" id="city" required>
                    <br>
                </div>
                <div class="col">
                    <label for="link" class="form-label">Facebook</label>
                    <input type="url" class="form-control form-control-sm" id="link" required>
                    <br>
                    <label for="link" class="form-label">LinkedIn</label>
                    <input type="url" class="form-control form-control-sm" id="link" required>
                </div>

                <div class="cv_head text-center">
                    <h3><u>Education</u></h3>
                </div>
                <br>
                <br>
                <div class="col-3"></div>
                <div class="col">
                    <label for="ss" class="form-label">Secondary School</label>
                    <input type="text" class="form-control form-control-sm" id="ss" required>
                    <br>
                    <label for="syear" class="form-label">Starting Year</label>
                    <input type="number" class="form-control form-control-sm" id="syear" required>
                    <br>
                    <label for="eyear" class="form-label">Ending Year</label>
                    <input type="number" class="form-control form-control-sm" id="eyear" required>
                    <br>
                    <br>
                    <label for="hs" class="form-label">Higher School</label>
                    <input type="text" class="form-control form-control-sm" id="hs" required>
                    <br>
                    <label for="syear" class="form-label">Starting Year</label>
                    <input type="number" class="form-control form-control-sm" id="syear" required>
                    <br>
                    <label for="eyear" class="form-label">Ending Year</label>
                    <input type="number" class="form-control form-control-sm" id="eyear" required>
                    <br>
                </div>
                <div class="col">
                    <label for="uni" class="form-label">University</label>
                    <input type="text" class="form-control form-control-sm" id="uni" required>
                    <br>
                    <label for="syear" class="form-label">Starting Year</label>
                    <input type="number" class="form-control form-control-sm" id="syear" required>
                    <br>
                    <label for="eyear" class="form-label">Ending Year</label>
                    <input type="number" class="form-control form-control-sm" id="eyear" required>
                    <br>
                    <label for="dept" class="form-label">Department</label>
                    <input type="text" class="form-control form-control-sm" id="dept" required>
                    <br>
                    <label for="major" class="form-label">Major</label>
                    <input type="text" class="form-control form-control-sm" id="major" required>
                    <br>
                    <label for="cgpa" class="form-label">CGPA</label>
                    <input type="text" class="form-control form-control-sm" id="cgpa" required>
                    <br>
                </div>

                <div class="cv_head text-center">
                    <h3><u>Technical Skills</u></h3>
                </div>
                <br>
                <br>
                <div id="tskill">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col">
                            <label for="t_skill" class="form-label">Skill</label>
                            <input type="text" class="form-control form-control-sm" id="t_skill" required>
                            <br>
                            <label for="des" class="form-label">Describe</label>
                            <textarea class="form-control" placeholder="Describe..." id="des"
                                style="height: 80px;"></textarea>
                            <br>
                            <label for="rp" class="form-label">Related Projects</label>
                            <input type="text" class="form-control form-control-sm" id="rp" required>
                            <br>
                            <button type="button" class="btn btn-success btn-lg add1">Add</button>
                        </div>
                        <br>
                        <div class="col"></div>
                        <br>
                    </div>
                    <br><br>
                </div>

                <div class="cv_head text-center">
                    <h3><u>Soft Skills</u></h3>
                </div>
                <br>
                <br>
                <div id="sskill">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col">
                            <label for="s_skill" class="form-label">Skill</label>
                            <input type="text" class="form-control form-control-sm" id="s_skill" required>
                            <br>
                            <button type="button" class="btn btn-success btn-lg add2">Add</button>
                        </div>
                        <br>
                        <div class="col"></div>
                        <br>
                    </div>
                    <br>
                    <br>
                </div>

                <br>
                <br>

                <div class="cv_head text-center">
                    <h3><u>Volunteer Experience</u></h3>
                </div>
                <br>
                <br>
                <div id="v_exp">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col">
                            <label for="e_name" class="form-label">Event name</label>
                            <input type="text" class="form-control form-control-sm" id="e_name" required>
                            <br>
                            <label for="role" class="form-label">Role</label>
                            <input type="text" class="form-control form-control-sm" id="role" required>
                            <br>
                            <label for="cont" class="form-label">Your Contribution</label>
                            <textarea class="form-control" placeholder="Details..." id="cont"
                                style="height: 80px;"></textarea>
                            <br>
                            <button type="button" class="btn btn-success btn-lg add3">Add</button>
                        </div>
                        <br>
                        <div class="col"></div>
                        <br>
                    </div>
                    <br>

                    <div class="cv_head text-center">
                        <h3><u>Personal Projects</u></h3>
                    </div>
                    <br>
                    <br>
                    <div id="p_projects">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <label for="p_name" class="form-label">Project Name</label>
                                <input type="text" class="form-control form-control-sm" id="p_name" required>
                                <br>
                                <label for="ver" class="form-label">Verified By</label>
                                <input type="text" class="form-control form-control-sm" id="ver" required>
                                <br>
                                <label for="p_des" class="form-label">Project Description</label>
                                <textarea class="form-control" placeholder="Details..." id="p_des"
                                    style="height: 80px;"></textarea>
                                <br>
                                <button type="button" class="btn btn-success btn-lg add4">Add</button>
                            </div>
                            <br>
                            <div class="col"></div>
                            <br>
                        </div>
                        <br><br>
                    </div>

                    <div class="cv_head text-center">
                        <h3><u>Publications</u></h3>
                    </div>
                    <br>
                    <br>
                    <div id="pub">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control form-control-sm" id="title" required>
                                <br>
                                <label for="year_p" class="form-label">Year Published</label>
                                <input type="number" class="form-control form-control-sm" id="year_p" required>
                                <br>
                                <label for="ver" class="form-label">Verified By</label>
                                <input type="text" class="form-control form-control-sm" id="ver" required>
                                <br>
                                <button type="button" class="btn btn-success btn-lg add5">Add</button>
                            </div>
                            <br>
                            <div class="col"></div>
                            <br>
                        </div>
                    </div>

                    <br><br>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col">
                        <input class="btn btn-primary" type="submit" value="Submit">
                        </div>
                    </div>
            </form>
        </div>
        <br><br>
    </div>

    <div class="bottom">
            <div>
                Developed by
            </div>
            <div>
                Deadly Diamond Of Death | 2022
            </div>
        </div>


    <br>
    <br>


    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function () {
            $(".add1").click(function (a) {
                a.preventDefault();
                $("#tskill").prepend(`
                    <div class="row">
                        <div class="col"></div>
                            <div class="col">
                            <label for="skill" class="form-label">Skill</label>
                            <input type="text" class="form-control form-control-sm" id="skill" required>
                            <br>
                            <label for="des" class="form-label">Describe</label>
                            <textarea class="form-control" placeholder="Describe..." id="des" style="height: 80px;"></textarea>
                            <br>
                            <label for="rp" class="form-label">Related Projects</label>
                            <input type="text" class="form-control form-control-sm" id="rp" required>
                            <br>
                            <button type="button" class="btn btn-danger btn-lg remove1">Remove</button>
                        </div>
                        <br>
                    <div class="col"></div>
                    <br>
                    </div>
                    <br>`);
            });

            $(document).on('click', '.remove1', function (a) {
                a.preventDefault();
                let delete1 = $(this).parent();
                $(delete1).remove();
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $(".add2").click(function (a) {
                a.preventDefault();
                $("#sskill").prepend(`
                <div class="row">
                        <div class="col"></div>
                        <div class="col">
                            <label for="s_skill" class="form-label">Skill</label>
                            <input type="text" class="form-control form-control-sm" id="s_skill" required>
                            <br>
                            <button type="button" class="btn btn-danger btn-lg remove2">Remove</button>
                        </div>
                        <br>
                        <div class="col"></div>
                        <br>
                    </div>
                    <br>`);
            });

            $(document).on('click', '.remove2', function (a) {
                a.preventDefault();
                let delete1 = $(this).parent();
                $(delete1).remove();
            });
        });
    </script>


    <script>
        $(document).ready(function () {
            $(".add3").click(function (a) {
                a.preventDefault();
                $("#v_exp").prepend(`
                <div class="row">
                        <div class="col"></div>
                        <div class="col">
                            <label for="e_name" class="form-label">Event name</label>
                            <input type="text" class="form-control form-control-sm" id="e_name" required>
                            <br>
                            <label for="role" class="form-label">Role</label>
                            <input type="text" class="form-control form-control-sm" id="role" required>
                            <br>
                            <label for="cont" class="form-label">Your Contribution</label>
                            <textarea class="form-control" placeholder="Details..." id="cont" style="height: 80px;"></textarea>
                            <br>
                            <button type="button" class="btn btn-danger btn-lg remove3">Remove</button>
                        </div>
                        <br>
                        <div class="col"></div>
                        <br>
                    </div>
                    <br>`);
            });

            $(document).on('click', '.remove3', function (a) {
                a.preventDefault();
                let delete1 = $(this).parent();
                $(delete1).remove();
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $(".add4").click(function (a) {
                a.preventDefault();
                $("#p_projects").prepend(`
                <div class="row">
                        <div class="col"></div>
                        <div class="col">
                            <label for="e_name" class="form-label">Event name</label>
                            <input type="text" class="form-control form-control-sm" id="e_name" required>
                            <br>
                            <label for="role" class="form-label">Role</label>
                            <input type="text" class="form-control form-control-sm" id="role" required>
                            <br>
                            <label for="cont" class="form-label">Your Contribution</label>
                            <textarea class="form-control" placeholder="Details..." id="cont" style="height: 80px;"></textarea>
                            <br>
                            <button type="button" class="btn btn-danger btn-lg remove4">Remove</button>
                        </div>
                        <br>
                        <div class="col"></div>
                        <br>
                    </div>
                    <br>`);
            });

            $(document).on('click', '.remove4', function (a) {
                a.preventDefault();
                let delete1 = $(this).parent();
                $(delete1).remove();
            });
        });
    </script>

    <script>
        $(document).ready(function () {
                $(".add5").click(function (a) {
                    a.preventDefault();
                    $("#pub").prepend(`
                    <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control form-control-sm" id="title" required>
                                <br>
                                <label for="year_p" class="form-label">Year Published</label>
                                <input type="number" class="form-control form-control-sm" id="year_p" required>
                                <br>
                                <label for="ver" class="form-label">Verified By</label>
                                <input type="text" class="form-control form-control-sm" id="ver" required>
                                <br>
                                <button type="button" class="btn btn-danger btn-lg remove5">Remove</button>
                            </div>
                            <br>
                            <div class="col"></div>
                            <br>
                        </div>
                        <br>`);
                });

                $(document).on('click', '.remove5', function (a) {
                    a.preventDefault();
                    let delete1 = $(this).parent();
                    $(delete1).remove();
                });
            });
    </script>

</body>

</html>
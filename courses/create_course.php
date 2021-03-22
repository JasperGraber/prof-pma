<div class="container" style="background-color:white;">
    <div class="row my-3">
        <div class="col-12">
            <h3>Cursus</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="index.php?page=courses/create_course_script" method="post">
                <div class="row">
                    <div class="col-md-1">
                        <label for="inputField">Vak</label>
                        <input name="field" type="text" class="form-control" id="inputField" placeholder="">
                    </div>
                    <div class="col-md-3">
                        <label for="inputCourse">Cursus</label>
                        <input name="course" type="text" class="form-control" id="inputCourse" placeholder="">
                    </div>
                    <div class="col-md-4">
                        <label for="inputEducation">Opleiding</label>
                        <select name="education" class="form-control" id="inputEducation">
                            <option></option>
                            <option value="1">Software developer</option>
                            <option value="2">Applicatie- en Media ontwikkelaar</option>
                            <option value="3">Expert medewerker IT systems and devices</option>
                            <option value="4">Medewerker IT systems and devices</option>
                            <option value="5">ICT- netwerkbeheerder</option>
                            <option value="6">Medewerker beheer ICT</option>
                            <option value="7">Medewerker ICT</option>
                        </select>
                    </div>
                    <div class="col-md-1">
                        <label for="inputSemester">Semester</label>
                        <select name="semester" class="form-control" id="inputSemester">
                            <option></option>
                            <option value="1">S1</option>
                            <option value="2">S2</option>
                            <option value="3">S3</option>
                            <option value="4">S4</option>
                            <option value="5">S5</option>
                            <option value="6">S6</option>
                        </select>
                    </div>
                    <div class="col-md-1">
                        <label for="inputPeriod">Periode</label>
                        <select name="period" class="form-control" id="inputPeriod">
                            <option></option>
                            <option value="1">P1</option>
                            <option value="2">P2</option>
                            <option value="3">P3</option>
                            <option value="4">P4</option>
                            <option value="5">P5</option>
                            <option value="6">P6</option>
                            <option value="7">P7</option>
                            <option value="8">P8</option>
                            <option value="9">P9</option>
                            <option value="10">P10</option>
                            <option value="11">P11</option>
                            <option value="12">P12</option>
                        </select>
                    </div>
                    <div class="col-md-1">
                        <label for="inputCohort">Cohort</label>
                        <select name="cohort" class="form-control" id="inputCohort">
                            <option></option>
                            <option value="1">C2018</option>
                            <option value="2">C2019</option>
                            <option value="3">C2020</option>
                            <option value="4">C2021</option>
                        </select>
                    </div>
                    <div class="col-md-1 my-4">
                        <button type="submit" class="btn btn-warning">Toevoegen</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
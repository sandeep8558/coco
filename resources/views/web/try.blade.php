<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program - Coco Preschool</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

@include('layouts.web.header')

<div class="container-fluid">
    <!-- Applications table -->
    <div class="container mt-4 mb-5 border">
       <div class="row g-4 mb-5">

        </div>
       </div>
    </div>


    <!-- Application parents -->
    <div class="container mt-4 mb-5 border">
        
    </div>


     <!-- Application sibling table -->
    <div class="container mt-4 mb-5 border">
        <div class="row g-4 mb-5">

            <div class="col-12 col-xl-3">
                <select class="form-select" id="relation" aria-label="Floating label select example" name="relation">
                    <option value="">Relation with Student</option>
                    <option value="Brother">Brother</option>
                    <option value="Sister">Sister</option>
                </select>
            </div>

            

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="grade" name="grade" value="{{ old('grade') }}">
                        <label for="grade">Grade</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="grade" name="grade" value="{{ old('grade') }}">
                        <label for="grade">Grade</label>
                    </div>
            </div>
            

        </div>
    </div>
</div>

@include('layouts.web.footer')
</body>
</html>

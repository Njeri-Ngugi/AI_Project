<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Your custom CSS file -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/lakes.js"></script>
    <title>Lake Classification</title>
</head>

<body>
    @php
        $mild_lake_names = App\Models\Mild_Lake::orderBy('Percentage_Decrease', 'desc')
            ->take(10)
            ->get();
        $moderate_lake_names = App\Models\Moderate_Lake::orderBy('Percentage_Decrease', 'desc')
            ->take(10)
            ->get();
        $severe_lake_names = App\Models\Severe_Lake::orderBy('Percentage_Decrease', 'desc')
            ->take(10)
            ->get();
    @endphp
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-left">
        <a class="navbar-brand" href="#">Lake Classification</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#feedback">Feedback</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content Area -->
    <div class="container mt-5">
        <!-- Hero Section -->
        <section class="hero-section">
            <img src="assets/images/Hero.jpg" alt="Lake Hero Image" class="img-fluid">
            <div class="hero-text">
                <h1 class="display-4">Explore Lake Classification</h1>
                <p class="lead">Discover different types of lakes based on the rate of decline.</p>
            </div>
        </section>

        <!-- Toggle Buttons -->
        <div class="toggle-buttons">
            <button class="btn btn-lakes" onclick="showLakes('mild-lake-row')">Mild Lakes</button>
            <button class="btn btn-lakes" onclick="showLakes('moderate-lake-row')">Moderate Lakes</button>
            <button class="btn btn-lakes" onclick="showLakes('severe-lake-row')">Severe Lakes</button>
        </div>

        <!-- Search Bar -->
        {{-- <div class="search-bar mt-3">
            <input type="text" id="lakeSearch" placeholder="Search for a lake..." class="form-control">
            <button class="btn btn-search" onclick="searchLakes()">Search</button>
        </div> --}}

        <!-- Sort Section -->
        {{-- <div class="sort-section mt-3">
            <label for="sortSelect">Sort by Rate of Decline:</label>
            <select id="sortSelect" class="form-control" onchange="sortLakes()">


                <option value="top-10">Top 10</option>
                <option value="asc">Ascending</option>

                <option value="desc">Descending</option>
            </select>
        </div> --}}

        <!-- Lake Details Table -->
        <table class="table mt-4" id="mild-lake-row">
            <thead>
                <tr>
                    <th scope="col">Lake ID</th>
                    <th scope="col">Area in 2015</th>
                    <th scope="col">Area in 2016</th>
                    <th scope="col">Percentage Decrease</th>
                </tr>
            </thead>
            @foreach ($mild_lake_names as $mild_lake_name)
            <tbody>
                    <tr>
                        <td>
                            {{ $mild_lake_name->Filename }}
                        </td>
                        <td>
                            <a href="{{ route('lake.image', ['filename' => $mild_lake_name->Filename]) }}"
                                target="blank">
                                {{ $mild_lake_name->Area_2015 }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('lake2016.image', ['filename' => $mild_lake_name->Filename]) }}"
                                target="blank">
                                {{ $mild_lake_name->Area_2016 }}
                            </a>
                        </td>
                        <td>
                            {{ $mild_lake_name->Percentage_Decrease }}
                        </td>
                    </tr>
                </tbody>
                @endforeach
        </table>
        <table class="table mt-4" id="moderate-lake-row">
            <thead>
                <tr>
                    <th scope="col">Lake ID</th>
                    <th scope="col">Area in 2015</th>
                    <th scope="col">Area in 2016</th>
                    <th scope="col">Percentage Decrease</th>
                </tr>
            </thead>
            <tbody>
                     @foreach ($moderate_lake_names as $moderate_lake_name)
                    <tr class="moderate-lake-row">
                        <td>
                            {{ $moderate_lake_name->Filename }}

                        </td>
                        <td>
                            <a href="{{ route('lake.image', ['filename' => $moderate_lake_name->Filename]) }}"
                                target="blank">
                                {{ $moderate_lake_name->Area_2015 }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('lake2016.image', ['filename' => $moderate_lake_name->Filename]) }}"
                                target="blank">
                                {{ $moderate_lake_name->Area_2016 }}
                            </a>
                        </td>
                        <td>
                            {{ $moderate_lake_name->Percentage_Decrease }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <table class="table mt-4" id="severe-lake-row">
            <thead>
                <tr>
                    <th scope="col">Lake ID</th>
                    <th scope="col">Area in 2015</th>
                    <th scope="col">Area in 2016</th>
                    <th scope="col">Percentage Decrease</th>
                </tr>
            </thead>
            <tbody>
                
                    @foreach ($severe_lake_names as $severe_lake_name)
                    <tr class="severe-lake-row">
                        <td>
                            {{ $severe_lake_name->Filename }}

                        </td>
                        <td>
                            <a href="{{ route('lake.image', ['filename' => $severe_lake_name->Filename]) }}"
                                target="blank">
                                {{ $severe_lake_name->Area_2015 }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('lake2016.image', ['filename' => $severe_lake_name->Filename]) }}"
                                target="blank">
                                {{ $severe_lake_name->Area_2016 }}
                            </a>
                        </td>
                        <td>
                            {{ $severe_lake_name->Percentage_Decrease }}
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>

        <!-- About Section -->
        <section id="about" class="mt-5">
            <h2 class="mb-4">About Lake Classification</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod quam vel aliquet commodo. Integer
                bibendum justo vel fermentum imperdiet.</p>

            <div class="download-section mt-3">
                <p>Download the classification report:</p>
                <p></p>

                <br>
                <a href="report.pdf" download>
                    <img src="assets/images/download_icon.png" alt="Download Icon" class="download-icon">
                    Download Report
                </a>
            </div>
        </section>

        <!-- Team Section -->
        <section id="team" class="content mt-5">
            <h2>Team</h2>
            <p>Add your team members and their roles here.</p>
        </section>




        <!-- Bootstrap JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="script.js"></script>
</body>

</html>

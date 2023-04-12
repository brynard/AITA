
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-3Wiw5zC39JZ5r5P5j6f5+qLtuX7y5p6U2V7yzeQ44RK0EWO1ZprJowUKMU0P+oLd" crossorigin="anonymous"> --}}

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Research Management Centre</title>
    <style>

    </style>
</head>

<body>

    <main>
        <div class="action-bar">
            <input type="text" placeholder="Search...">
            <div class="actions">
              <button>More</button>
              <button class="add-button">+ Add</button>
            </div>
          </div>
          
          <div class="table">
            <div class="table-tabs">
              <button class="active">All</button>
              <button>Asset</button>
              <button>Inventory</button>
            </div>
            <div class="table-header">
              <div class="checkbox"><input type="checkbox"></div>
              <div class="item">Items</div>
              <div class="type">Type</div>
              <div class="price">Price</div>
              <div class="date-received">Date Received</div>
              <div class="actions"></div>
            </div>
            <div class="table-row">
              <div class="checkbox"><input type="checkbox"></div>
              <div class="item">Item 1</div>
              <div class="type">Asset</div>
              <div class="price">$100</div>
              <div class="date-received">2022-04-09</div>
              <div class="actions"><button class="edit-button"><i class="fas fa-ellipsis-h"></i></button></div>
            </div>
            <div class="table-row">
              <div class="checkbox"><input type="checkbox"></div>
              <div class="item">Item 2</div>
              <div class="type">Inventory</div>
              <div class="price">$50</div>
              <div class="date-received">2022-04-10</div>
              <div class="actions"><button class="edit-button"><i class="fas fa-ellipsis-h"></i></button></div>
            </div>
            <!-- more table rows here -->
          </div>
       
    </main>
</body>

</html>
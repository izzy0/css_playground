<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JS Demo</title>

  <style>
    body {
      margin: 100px auto;
      max-width: 850px;
      transition: all ease 0.4s;
    }
  </style>

  <!-- JS Styles -->
  <style>
    li:hover {
      background-color: tomato;
      transition: 0.7s;
      cursor: pointer;
    }

    li:hover {
      background-color: #e3f1ff;
    }

    .right-a {
      float: right;
    }

    .left-a {
      float: left;
    }

    .array-title {
      display: flex;
      justify-content: space-between;
      padding: 5px 20px;
      border-bottom: 2px solid #1053c1;
    }

    .array-list {
      box-shadow: 1px 1px 1px #3362bf24;
      transition: all ease 0.4s;
    }

    .array-list:hover {
      box-shadow: 15px 5px 21px #3362bf24;
    }

    .mt-3 {
      margin-top: 35px;
    }
    
    .list-group {
	    margin-left:0;
    }
    
    .list-group-item {
      display: flex;
      justify-content: space-between;
    }

    .list-container {
      display: flex;
      justify-content: space-between;
      flex-grow: 3;
    }

    .remove-icon {
      position: relative;
      z-index: 5;
      margin-left: 15px;
      opacity: 0;
      transition: all ease-in-out 0.3s;
    }

    .list-group-item:hover .remove-icon {
      opacity: 1;
    }

    .modal-footer {
      justify-content: space-between;
    }

    .modal-body>.form-group>.form-floating:nth-child(n+2) {
      margin-top: 10px;
    }

    .one-el {
      justify-content: flex-end;
    }

    .list-container>span {
      max-width: 350px;
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <!-- add modal button -->
        <div class="modal-add-container">
          <span class="right-a">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModalrfp">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                <path
                  d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z" />
              </svg> &nbsp; Add RFP
            </button>
          </span>
        </div>
        <!-- Lists -->
        <h3 class="mt-3">RFPs Pending Engagement</h3>
        <div class="array-list">
          <div class="array-title">
            <span>Service Name</span>
            <span>Date of Request</span>
          </div>
          <ul class="list-group-1 list-group ">
          </ul>
        </div>
        <h3 class="mt-3">Engaged Services</h3>
        <div class="array-list">
          <div class="array-title">
            <span>Service Name</span>
            <span>Provider</span>
            <span>Date Engaged</span>
          </div>
          <ul class="engaged-group list-group">
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ADD Modal -->
  <div class="modal fade" id="addModalrfp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="addModalrfpLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addModalrfpLabel">Add RFP</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <div class="form-floating">
              <input id="main-input" type="text" class="form-control" placeholder="Service Name">
              <label for="main-input">Service Name</label>
            </div>
            <div class="form-floating">
              <input id="second-input" type="text" class="form-control" placeholder="MM/DD/YYYY">
              <label for="second-input">Date Service Requested</label>
            </div>
          </div>
        </div>
        <div class="modal-footer one-el">
          <button type="button" class="btn btn-success" id="main-button" data-bs-dismiss="modal">Add RFP</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Pending RFP</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <div class="form-floating">
              <input id="edit-input" type="text" class="form-control" placeholder="Service Name">
              <label for="edit-input">Service Name</label>
            </div>
            <div class="form-floating">
              <input id="edit-input-date" type="text" class="form-control" placeholder="MM/DD/YYYY">
              <label for="edit-input-date">Date Service Requested</label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="move-button" data-bs-dismiss="modal">Move to Engaged</button>
          <button type="button" class="btn btn-success" id="edit-button" data-bs-dismiss="modal">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Move to Service Modal -->
  <div class="modal fade" id="moveModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="moveModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="moveModalLabel">Engaged RFP</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <div class="form-floating">
              <input id="move-input" type="text" class="form-control" placeholder="Service Name">
              <label for="move-input">Service Name</label>
            </div>
            <div class="form-floating">
              <input id="move-input-provider" type="text" class="form-control" placeholder="Provider">
              <label for="move-input-provider">Provider</label>
            </div>
            <div class="form-floating">
              <input id="move-input-date" type="text" class="form-control" placeholder="MM/DD/YYYY">
              <label for="move-input-date">Date Service Requested</label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="move-service-button" data-bs-dismiss="modal">Move to Pending</button>
          <button type="button" class="btn btn-success" id="move-save-button" data-bs-dismiss="modal">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    $(document).ready(function () {
      let removeSVG = \'<span class="remove-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></span>\';
      var items = getFromLocal(\'memos\');
      var items2 = getFromLocal(\'memos2\');
      items2 = items2.filter(Boolean);
      var index;
      var index2;
      loadList(items);
      loadList2(items2);

      $(\'#main-button\').click(function () {
        var value = $(\'#main-input\').val();
        var value2 = $(\'#second-input\').val();
        var shortArray = [value, value2];
        items.push(shortArray);
        $(\'#main-input\').val(\'\');
        $(\'#second-input\').val(\'\');
        loadList(items);
        storeToLocal(\'memos\', items);
      });

      // delete service
      $(\'.list-group-1\').on( \'click\', \'.remove-icon\', function (event) {
        event.stopPropagation();
        index = $(\'.list-group-1 li .remove-icon\').index(this);
        $(\'.list-group-1 li\').eq(index).remove();
        items.splice(index, 1);
        storeToLocal(\'memos\', items);
      });

      $(\'.engaged-group\').on( \'click\', \'.remove-icon\', function (event) {
        event.stopPropagation();
        index = $(\'.engaged-group li .remove-icon\').index(this);
        $(\'.engaged-group li\').eq(index).remove();
        items2.splice((index ), 1);
        storeToLocal(\'memos2\', items2);
      });

      // edit panel
      $(\'.list-group-1\').on( \'click\', \'.list-container\', function () {
        index = $(\'.list-container\').index(this);
        var content = items[index];
        $(\'#edit-input\').val(content[0]);
        $(\'#edit-input-date\').val(content[1]);
      });

      $(\'.engaged-group\').on( \'click\', \'.list-container\', function () {
        index = $(\'.engaged-group .list-container\').index(this);
        var content = items2[index];
        $(\'#move-input\').val(content[0]);
        $(\'#move-input-date\').val(content[1]);
        $(\'#move-input-provider\').val(content[2]);
      });

      $(\'#edit-button\').click(function () {
        var value = $(\'#edit-input\').val();
        var value2 = $(\'#edit-input-date\').val();
        var editArray = [value, value2];
        items[index] = editArray;
        loadList(items);
        storeToLocal("memos", items);
      });

      $(\'#move-save-button\').click(function () {
        var value = $(\'#move-input\').val();
        var value2 = $(\'#move-input-date\').val();
        var value3 = $(\'#move-input-provider\').val();
        var editArray = [value, value2, value3];
        items2[index] = editArray;
        loadList2(items2);
        storeToLocal("memos2", items2);
      });

      $(\'#move-button\').click(function () {
        var value = $(\'#edit-input\').val();
        var value2 = $(\'#edit-input-date\').val();
        var moveArray = [value, value2, \'\'];
        items2.push(moveArray);
        loadList2(items2);
        storeToLocal("memos2", items2);
        // remove element from service list
        $(\'.list-group-1 li\').eq(index).remove();
        items.splice(index, 1);
        storeToLocal(\'memos\', items);
        loadList(items);
      });

      $(\'#move-service-button\').click(function () {
        var value = $(\'#move-input\').val();
        var value2 = $(\'#move-input-date\').val();
        var moveArray = [value, value2, \' \'];
        items.push(moveArray);
        loadList(items);
        storeToLocal("memos", items);
        // remove element from engaged list
        $(\'.engaged-group li\').eq(index).remove();
        items2.splice(index, 1);
        storeToLocal(\'memos2\', items2);
        loadList2(items2);
      });

      // loadList RFPS
      function loadList(items) {
        $(\'.list-group-1 li\').remove();
        if (items.length > 0) {
          for (var i = 0; i < items.length; i++) {
            $(\'.list-group-1\').append(\'<li class= "list-group-item" ><span data-bs-toggle="modal" data-bs-target="#editModal" class="list-container"><span class="">\' + items[i][0] + \'</span><span class=""> \' + items[i][1] + \'</span></span>\' + removeSVG + \'</li>\');
          }
        }
      };

      function loadList2(items2) {
        var engageArr = items2;
        $(\'.engaged-group li\').remove();
        if (engageArr.length > 0) {
          for (var i = 0; i < engageArr.length; i++) {
            $(\'.engaged-group\').append(\'<li class= "list-group-item" ><span data-bs-toggle="modal" data-bs-target="#moveModal" class="list-container"><span >\' + engageArr[i][0] + \'</span><span class="provider">\' + engageArr[i][2] + \'</span><span> \' + engageArr[i][1] + \'</span></span>\' + removeSVG + \'</li>\');
          }
        }
      };

      function storeToLocal(key, items, key2, items2) {
        localStorage[key] = JSON.stringify(items);
        if (items !== \'undefined\') {
          localStorage[key2] = JSON.stringify(items2);
        }
      }

      function getFromLocal(key, key2) {
        if (localStorage[key]) {
          if (localStorage[key2] !== \'undefined\') {
            JSON.parse(localStorage[key2]);
          }
          return JSON.parse(localStorage[key]);
        } else {
          return [];
        }
      }
    });
  </script>
</body>

</html>






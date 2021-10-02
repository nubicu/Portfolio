function Table() {
  //sets attributes
  this.header = [];
  this.data = [[]];
  this.tableClass = '';
}

var $previousUsername;

var $keys = ['Username', 'Prenume', 'Email'];
var $values;

$(document).ready(function () {
          var $check = $('#check');
          $(check).click(function () {
              var inputVal = $('#input_user').val();

              $.post('check_users.php', {
                    username: inputVal,
                  }, function (data) {
                    if (data.available == true && data.username != $previousUsername)
                    {
                      $previousUsername = data.username;
                      $values = [data.username, data.prenume, data.email];

                      Table.prototype.setHeader = function (keys) {
                              //sets header data
                              this.header = keys;
                              return this;
                            };

                      Table.prototype.setData = function (data) {
                              //sets the main data
                              this.data = data;
                              return this;
                            };

                      Table.prototype.setTableClass = function (tableClass) {
                              this.tableClass = tableClass; //sets the table class name
                              return this;
                            };

                      Table.prototype.build = function (container) {

                              //default selector
                              container = container || '.table-container';

                              //creates table
                              var $table = $('<table></table>').addClass(this.tableClass);

                              var $tr = $('<tr></tr>'); //creates row
                              var $th = $('<th></th>'); //creates table header cells
                              var $td = $('<td></td>'); //creates table cells

                              var $header = $tr.clone(); //creates header row

                              //fills header row
                              this.header.forEach(function (d) {
                                  $header.append($th.clone().text(d));
                                });

                              //creates
                              var $tbody = $('<tbody></tbody>');

                              var $row = $tr.clone(); //creates a row

                              //fills out the table body
                              this.data.forEach(function (d) {
                                      $row.append($td.clone().text(d)); //fills in the row
                                    });

                              $tbody.append($row); //puts row on the tbody

                              //attaches header row
                              $table.append($('<thead></thead>').append($header));

                              //puts entire table in the container
                              $(container).append($table.append($tbody));

                              return this;
                            };

                      //creates new table object
                      var $table = new Table();

                      //sets table data and builds it
                      $table
                                        .setHeader($keys)
                                        .setData($values)
                                        .setTableClass('tabel')
                                        .build();
                    } else {
                      console.log('Utilizatorul nu exista sau sunt deja afisate informatiile!');
                    }
                  }, 'json');
            });
        });

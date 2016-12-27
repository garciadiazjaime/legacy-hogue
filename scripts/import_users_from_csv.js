const mysql = require('mysql');
const csv = require("fast-csv");
const fs = require('fs');


readUsersFromCSV()
  .then(saveUsers);

function readUsersFromCSV() {
  return new Promise((resolve, reject) => {
    const stream = fs.createReadStream("./data/hogue_users.csv");
    const users = [];

    var csvStream = csv()
      .on("data", function(data) {
        if (data[0] != 'name' && data[1] != 'employee_number') {
          users.push({
            name: data[0],
            noEmp: data[1],
            account: data[2] ? data[2] : '',
            created: data[4] ? new Date(data[4]) : new Date()
          });
        }
      })
      .on("end", function() {
        resolve(users);
      });

    stream.pipe(csvStream);
  });
}

function saveUsers(data) {
  var connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'hogue'
  });
  const summary = {
    users: data.length,
    saved: 0,
    errors: 0
  };

  connection.connect();

  const promises = data.map((user) => {
    return new Promise((resolve, reject) => {
      const query = `INSERT INTO user(name, no_emp, no_cuenta, role, status, date) VALUES('${user.name}', '${user.noEmp}', '${user.account}', 0, 1, '${user.created.toJSON().split('T')[0]}');`;
      connection.query(query, (err, result) => {
        if (err) {
          summary.errors += 1;
          reject(err);
        } else {
          summary.saved += 1;
          resolve(result);
        }
      });
    });
  });

  Promise.all(promises).then(() => {
    console.log('Users imported :) \n', summary);
    connection.end();
    process.exit();
  });
}

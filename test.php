<body>
        <div class="text-95 col-sm-3 align-self-start d-sm-flex justify-content-end">
          <hr class="d-sm-none" />
          <div class="text-grey-m2">
            <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125"></div>

            <div class="col">
              <label>ID Number</label>
              <input class="form-control" type="text" placeholder="ID Number">
            </div>

            <div class="my-2">
              <div class="input-group-prepend">
                <span class="input-group-text">Date:</span>                  
                <input type="text" id="datetimeInput" value="" />
              </div>
            </div>
          </div>
        </div>

        <table>
          <thead>
            <tr>
              <th>#</th>
              <th>Description</th>
              <th>Qty</th>
              <th>Unit Price</th>
            </tr>
          </thead>
          <tbody>
            ${Array.from(mainRows)
              .map((row) => `
                <tr>
                  <td>${row.querySelector('td[id="#"] input').value}</td>
                  <td>${row.querySelector('td[id="Description"] input').value}</td>
                  <td>${row.querySelector('td[id="Qty"] input').value}</td>
                  <td>${row.querySelector('td[id="Unit Price"] input').value}</td>
                </tr>
              `)
              .join('')}
          </tbody>
        </table>

        <script>
          // Additional internal script
          // You can add your custom JavaScript code here
          // This script will be executed when printing the content
        </script>
      </body>
    </html>`;
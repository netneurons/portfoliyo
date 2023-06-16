const express = require('express');
const app = express();

// Serve static assets
app.use(express.static(__dirname));


// Start server
const listener = app.listen(3030, function() {
  console.log('Your app is listening on port ' + listener.address().port);
});
const path = require('path');  
 module.exports = {  
 configureWebpack: {  
     resolve: {  
       alias: {  
         '@c': path.resolve(\_\_dirname, 'src/components'),  
         '@m': path.resolve(\_\_dirname, 'src/mixins'),  
       },  
     },  
 }
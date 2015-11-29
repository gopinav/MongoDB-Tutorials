var mongodb = require('mongodb');

var MongoClient = mongodb.MongoClient;

var url = 'mongodb://localhost:27017/fruits'

MongoClient.connect(url, function(err,db){
	if(err){
		console.log(err);
	}else{
		console.log('Connected to', url);

		var collection = db.collection('apples');

		var doc1 = {name: 'red apples', color: 'red'};
		var doc2 = {name: 'green apples', color: 'green'};

		collection.insert([doc1, doc2], function(err,res){
			if(err){
				console.log(err);
			}else {
				console.log('%d docs inserted', res.insertedCount);
			}
					db.close();
		});

	}
});
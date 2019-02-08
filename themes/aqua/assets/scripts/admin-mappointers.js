(function() {
		var List = function(backendID) {
				this.backendSelector = document.getElementById(backendID);
				this.list = [];
                var items;
                if (this.backendSelector.value) {
				    items = JSON.parse(decodeURIComponent(this.backendSelector.value));
                } else {
                    items = [];
                }    
        for (var i=0; i < items.length; i++) {
            this.list.push(items[i]);
        }

        this.push = function(line) {
            this.list.push(line);
        }

        this.insert = function(index, line) {
            var insertedElement = this.list.splice(index, 0, line);
            this.draw();
            this.encode();
        }

        this.moveUp = function(e) {

        	var item;
        	if (e.target.localName == "i") {
        			item = e.target.parentNode.parentNode.dataset.row;
        	} else {
        		item = e.target.parentNode.dataset.row;
        	}
        	if (item == 0) return

        	var removedElement = this.list.splice(item, 1);
        	this.insert(parseInt(item)-1, removedElement[0]);
        }

        this.moveDown = function(e) {
        	var item;
        	if (e.target.localName == "i") {
        			item = e.target.parentNode.parentNode.dataset.row;
        	} else {
        		item = e.target.parentNode.dataset.row;
        	}
        	if (item == this.list.length-1) { return; }

        	var removedElement = this.list.splice(item, 1);
        	this.insert(parseInt(item)+1, removedElement[0]);
        }

        this.delete = function(e) {
        		var item;
	        	if (e.target.localName == "i") {
	        		item = e.target.parentNode.parentNode.dataset.row;
	        	} else {
	        		item = e.target.parentNode.dataset.row;
	        	}
            var removedElement = this.list.splice(item, 1);
            this.draw();
            this.encode();
        }

        this.updateTitle = function(e) {
        	var item = e.target.parentNode.dataset.row;
        	this.list[item].title = e.target.value;
        	this.encode();
        }

        this.updateDist = function(e) {
        	var item = e.target.parentNode.dataset.row;
        	this.list[item].dist = e.target.value;
        	this.encode();
        }

        this.updateIcon = function(e) {
        	var item = e.target.parentNode.dataset.row;
        	this.list[item].icon = e.target.value;
        	this.encode();
        }

        this.updateBody = function(e) {
            var item = e.target.parentNode.dataset.row;
            this.list[item].body = e.target.value;
            this.encode();
        }


        this.encode = function() {

        	var encoded = encodeURIComponent(JSON.stringify(this.list))
            this.backendSelector.value = encoded;
        }	

    }

    var KeyRules = function(backendID) {
        List.call(this, backendID)
    }

    var Terms = function(backendID, listID) {
        List.call(this, backendID)
        this.listElement = listID
    }

    

    

    var myList = new List("backend-map-pointers");
    var generalRules = new KeyRules("aqua_terms_key_rules");
    var stayTerms = new Terms("aqua_terms_of_stay", "terms-of-stay");
    var reservationTerms = new Terms("aqua_terms_of_reservation", "terms-of-reservation");

    // TERMS OF STAY

    Terms.prototype.draw = function() {
        var itemCounter=1;
        var wrapper = document.getElementById(this.listElement);
        // remove children
        var first = wrapper.firstChild
        while (first) {
            wrapper.removeChild(first);
            first = wrapper.firstChild;
        }

        // create new structure
        for (var i=0; i<this.list.length; i++) {
            var record = document.createElement('div');
                record.className = "record";
                record.dataset.row = itemCounter-1;

            var id = "term-" + itemCounter;

            var input = document.createElement('textarea');
                input.name = id;
                input.id = id;
                input.rows = 2;
                input.className = "form-control";
                input.style = "width: 70%";
                input.value = this.list[i].body;
                input.addEventListener("keyup", this.updateBody.bind(this));


            var buttonDel = document.createElement('button')
                buttonDel.type = "button"
                buttonDel.className = "btn btn-danger"
                buttonDel.innerHTML = '<i class="fa fa-times" aria-hidden="true"></i>';
                buttonDel.addEventListener("click", this.delete.bind(this));

                var buttonUp = document.createElement('button')
                buttonUp.type = "button"
                buttonUp.className = "btn btn-info"
                buttonUp.innerHTML = '<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>';
                buttonUp.addEventListener("click", this.moveUp.bind(this));

                var buttonDown = document.createElement('button')
                buttonDown.type = "button"
                buttonDown.className = "btn btn-info"
                buttonDown.innerHTML = '<i class="fa fa-arrow-circle-down" aria-hidden="true"></i>';
                buttonDown.addEventListener("click", this.moveDown.bind(this));

            record.appendChild(input);
            record.appendChild(buttonUp);
            record.appendChild(buttonDown);
            record.appendChild(buttonDel);

            wrapper.appendChild(record);
            itemCounter++;
        }
    }

    var buttonNewTermOfStay = document.getElementById("add-new-term").addEventListener("click", function() {
        var newTxt;
        newTxt = document.getElementById("new_term").value;
        stayTerms.insert(0, {"body": newTxt});
        document.getElementById("new_term").value = "";

    });

    var buttonNewTermOfStay = document.getElementById("add-new-reservation-term").addEventListener("click", function() {
        var newTxt;
        newTxt = document.getElementById("new_reservation_term").value;
        reservationTerms.insert(0, {"body": newTxt});
        document.getElementById("new_reservation_term").value = "";

    });

    stayTerms.draw();
    reservationTerms.draw();

    // GENERAL RULES

    KeyRules.prototype.draw = function() {
        var itemCounter=1;
        var wrapper = document.getElementById('existing-rules');
        // remove children
        var first = wrapper.firstChild
        while (first) {
            wrapper.removeChild(first);
            first = wrapper.firstChild;
        }


        // create new structure
        for (var i=0; i<this.list.length; i++) {
            var record = document.createElement('div');
                record.className = "record";
                record.dataset.row = itemCounter-1;

            var id = "key-rule-" + itemCounter;

            var label = document.createElement('label');
            label.htmlFor = id;
            label.textContent = "Treść: ";

            var input = document.createElement('input');
                input.name = id;
                input.id = id;
                input.className = "form-control";
                input.style = "width: 70%";
                input.value = this.list[i].body;
                input.addEventListener("keyup", this.updateBody.bind(this));


            var buttonDel = document.createElement('button')
                buttonDel.type = "button"
                buttonDel.className = "btn btn-danger"
                buttonDel.innerHTML = '<i class="fa fa-times" aria-hidden="true"></i>';
                buttonDel.addEventListener("click", this.delete.bind(this));

                var buttonUp = document.createElement('button')
                buttonUp.type = "button"
                buttonUp.className = "btn btn-info"
                buttonUp.innerHTML = '<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>';
                buttonUp.addEventListener("click", this.moveUp.bind(this));

                var buttonDown = document.createElement('button')
                buttonDown.type = "button"
                buttonDown.className = "btn btn-info"
                buttonDown.innerHTML = '<i class="fa fa-arrow-circle-down" aria-hidden="true"></i>';
                buttonDown.addEventListener("click", this.moveDown.bind(this));

            record.appendChild(label);
            record.appendChild(input);
            record.appendChild(buttonUp);
            record.appendChild(buttonDown);
            record.appendChild(buttonDel);

            wrapper.appendChild(record);
            itemCounter++;
        }

    }



    var buttonNewRule = document.getElementById("add-new-rule").addEventListener("click", function() {
        var newTxt;
        newTxt = document.getElementById("new_rule_Body").value;
        generalRules.insert(0, {"body": newTxt});
        document.getElementById("new_rule_Body").value = "";

    })

    generalRules.draw();


    // MAP POINTERS

    List.prototype.draw = function() {

        var itemCounter=1;
        
        var wrapper = document.getElementById('existing-pointers');

        // remove children
        var first = wrapper.firstChild

        while (first) {
            wrapper.removeChild(first);
            first = wrapper.firstChild;
        }

        // create new structure

        for (var i=0; i<this.list.length; i++) {

            var record = document.createElement('div');
                record.className = "record";
                record.dataset.row = itemCounter-1;

            var id = "pointer-title-" + itemCounter;

            var labelTitle = document.createElement('label');
            labelTitle.htmlFor = id;
            labelTitle.textContent = "Tytuł: ";

            var inputTitle = document.createElement('input');
                inputTitle.name = id;
                inputTitle.id = id;
                inputTitle.className = "form-control";
                inputTitle.value = this.list[i].title;
                inputTitle.addEventListener("keyup", this.updateTitle.bind(this));

                id = "pointer-dist-" + itemCounter;

            var labelDist = document.createElement('label');
            labelDist.htmlFor = id;
            labelDist.textContent = "Odległość: ";

            var inputDist = document.createElement('input');
                inputDist.name = id;
                inputDist.id = id;
                inputDist.className = "form-control";
                inputDist.value = this.list[i].dist;
                inputDist.addEventListener("keyup", this.updateDist.bind(this));

                id = "pointer-icon-" + itemCounter;

                var labelSelect = document.createElement('label');
                labelSelect.htmlFor = id;
            labelSelect.textContent = "Ikona: ";
                var selectFaIcon = document.createElement('select');
                selectFaIcon.name = id;
                selectFaIcon.id = id;
                selectFaIcon.className = "form-control";
                selectFaIcon.addEventListener("change", this.updateIcon.bind(this));

                var options = ["fa-street-view", "fa-plane", "fa-car"]
                for (var j=0; j<options.length; j++) {
                    var option = document.createElement('option');
                    option.value = options[j];
                    option.textContent = options[j];
                    selectFaIcon.appendChild(option);
                }
                selectFaIcon.value = this.list[i].icon;

                // control buttons

                var buttonDel = document.createElement('button')
                buttonDel.type = "button"
                buttonDel.className = "btn btn-danger"
                buttonDel.innerHTML = '<i class="fa fa-times" aria-hidden="true"></i>';
                buttonDel.addEventListener("click", this.delete.bind(this));

                var buttonUp = document.createElement('button')
                buttonUp.type = "button"
                buttonUp.className = "btn btn-info"
                buttonUp.innerHTML = '<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>';
                buttonUp.addEventListener("click", this.moveUp.bind(this));

                var buttonDown = document.createElement('button')
                buttonDown.type = "button"
                buttonDown.className = "btn btn-info"
                buttonDown.innerHTML = '<i class="fa fa-arrow-circle-down" aria-hidden="true"></i>';
                buttonDown.addEventListener("click", this.moveDown.bind(this));

                record.appendChild(labelTitle);
                record.appendChild(inputTitle);
                record.appendChild(labelDist);
                record.appendChild(inputDist);
                record.appendChild(labelSelect);
                record.appendChild(selectFaIcon);
                record.appendChild(buttonUp);
                record.appendChild(buttonDown);
                record.appendChild(buttonDel);

                wrapper.appendChild(record);
                itemCounter++;
      }
    }


    myList.draw();
    // add new element

    var button = document.getElementById("add-new-record").addEventListener("click", function() {
    	var newTitle, newDist, newIcon;
    	newTitle = document.getElementById("pointer-title-new").value;
    	newDist = document.getElementById("pointer-dist-new").value;
    	newIcon = document.getElementById("pointer-icon-new").value;

    	myList.insert(0, {"title": newTitle, "dist": newDist, "icon": newIcon})

    	document.getElementById("pointer-title-new").value = "";
    	document.getElementById("pointer-dist-new").value = "";
    	document.getElementById("pointer-icon-new").value = "fa-street-view";
    })
}) ()
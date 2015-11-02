var test = function() {
		this.chars = "";
		this.add = function(strings) {
			this.chars += strings;
			return this;//返回
		}
		this.show = function  () {
			alert(this.chars);
			this.chars = "";
		}
	}
	$ = new test();
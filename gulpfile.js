var gulp = require("gulp");
var bs = require("browser-sync").create();

gulp.task('serve', function () {
	bs.init({
		files: ['./application/**/*.php','./assets/**/*'],
		proxy: "http://localhost/work/repositorios/controle-ponto/",
		ui: {
			port: 3000
		}
	});
});

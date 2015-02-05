function loadSchedule() {
		scheduler.config.xml_date="%d-%m-%Y %H:%i";
		scheduler.init('scheduler_here',new Date(),"week");
}

loadSchedule();
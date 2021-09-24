

CREATE TABLE `admin` (
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO admin VALUES("32J15327@ict.edu.om","1010");



CREATE TABLE `event` (
  `fest_name` char(30) NOT NULL,
  `fest_college` text NOT NULL,
  `date` date NOT NULL,
  `department` text NOT NULL,
  `place` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `GSM` int(8) NOT NULL,
  `about_fest` varchar(200) NOT NULL,
  `Fest_type` text NOT NULL,
  `link` varchar(200) NOT NULL,
  UNIQUE KEY `fest_name` (`fest_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO event VALUES("4th Teaching and Learning Conf","Ibra College of Technology","2018-10-10","All Department","Ibra","32S15159@ict.edu.om","99912345","important for students who study Public Speaking","Conference","http://www.ict.edu.om");
INSERT INTO event VALUES("Human Resource Management (HRM","Hiher College of Technology","2018-10-01","Business Studies","Muscat","32S15159@ict.edu.om","99912345","writing an effective CV and preparing for interviews","Workshop","http://www.hct.edu.om");
INSERT INTO event VALUES("Human Resource Management Club","Higher College of Technology","2018-10-09","Business Studies","Muscat","32S15159@ict.edu.om","99912345","Important for Business Students","Conference","http://www.hct.edu.om");
INSERT INTO event VALUES("Seminar on GSM network","Ibra College of Technology","2018-10-23","Engineering ","Ibra","32S15159@ict.edu.om","99912345","Important for Engineering and IT students","Seminar","https://www.ict.edu.om");
INSERT INTO event VALUES("Seminar on Introduction to Arc","Al-Musanna College of Technology","2018-10-17","Engineering","Al-Musanna","32S15159@ict.edu.om","99912345","This seminar aimed to give first year diploma students an overview of Architectural Engineering","Seminar","http://www.act.edu.om");
INSERT INTO event VALUES("Seminar On ‘Enhanced Oil Recov","Al-Musanna College of Technology","2018-10-09","Engineering","Al-Musanna ","32S15159@ict.edu.om","99912345","Important for Mechanical engineering Students","Seminar","http://www.act.edu.om");
INSERT INTO event VALUES("Seminar on ‘Hybrid Technology’","Al-Musanna College of Technology","2018-03-27","Engineering","Al-Musanna","32S15159@ict.edu.om","99912345","The main objective of the seminar was to emphasize the emerging technologies incorporated in the use of green energy","Seminar","http://www.act.edu.om");
INSERT INTO event VALUES("Seminar on ‘Renewable Energy –","Al-Musanna College of Technology","2018-05-22","Engineering","Al-Musanna","32S15159@ict.edu.om","99912345","Important for Engineering Students","Seminar","http://www.act.edu.om");
INSERT INTO event VALUES("Seminar on ‘Student-Centered L","Al-Musanna College of Technology","2018-09-12","IT","Al-Musanna","32S15159@ict.edu.om","99912345","The intent of the seminar is to highlight the various mathematical models that can make the teaching and learning process more effective.","Seminar","http://www.act.edu.om");
INSERT INTO event VALUES("Seminar On “Research Issues In","Nizwa College of Technology","2018-04-26","IT","Nizwa","32S15159@ict.edu.om","99912345","The aim of this seminar is to share the research issues in the field of Disaster Recovery and Risk Management to the faculty members.","Seminar","https://www.nct.edu.om");
INSERT INTO event VALUES("Workshop on Advisement & INSPI","Al-Musanna College of Technology","2018-06-05","IT","Al-Musanna","32S15159@ict.edu.om","99912345","The workshop aimed at creating awareness regarding Advisement Procedures and to encourage the sharing of advisement-related issues.","Workshop","http://www.act.edu.om");
INSERT INTO event VALUES("Workshop On Arduino Programmin","Nizwa College of Technology","2018-09-09","Engineering","Nizwa","32S15159@ict.edu.om","99912345","Important for the Electrical Power section","Workshop","https://www.nct.edu.om");
INSERT INTO event VALUES("workshop on machine tools main","Shinas College of Technology","2018-11-13","Engineering","Shinas","32S15159@ict.edu.om","99912345","Important for mechanical students","Workshop","https://www.shct.edu.om");
INSERT INTO event VALUES("workshop on Matlab and Signal","Ibri College of Technology","2018-10-16","Engineering","Ibri","32S15159@ict.edu.om","99912345","Important for Advanced Diploma & Bachelor from all Specialization","Workshop","https://www.ibrict.edu.om");
INSERT INTO event VALUES("Workshop on PCB Development","Ibra College of Technology","2018-10-17","Engineering","Ibra","32S15159@ict.edu.om","99912345","This workshop aimed to impart knowledge on circuit designing and making PCB layout using the PCB wizard software","Workshop","https://www.ict.edu.om");
INSERT INTO event VALUES("Workshop On Quality Awareness","Nizwa College of Technology","2018-10-04","Business Studies","Nizwa","32S15159@ict.edu.om","99912345","important for Business Staffs","Workshop","https://www.nct.edu.om");
INSERT INTO event VALUES("Workshop on Review of Literatu","Ibra College of Technology","2018-10-02","IT","Ibra","32S15159@ict.edu.om","99912345","Important for Diploma Second Year from IT department","Workshop","https://www.ict.edu.om");
INSERT INTO event VALUES("workshop on ‘Rules and regulat","Shinas College of Technology","2018-10-16","Engineering","Shinas","32S15159@ict.edu.om","99912345","Important for the students to get a practical knowledge and skills and to get the know-how of rules and regulations of buildings used in Oman and how to execute the construction as per drawing.","Workshop","https://www.shct.edu.om");
INSERT INTO event VALUES("workshop on “Energy Conservati","Shinas College of Technology","2018-10-09","Engineering","Shinas","32S15159@ict.edu.om","99912345","important for civil engineering students","Workshop","https://www.shct.edu.om");
INSERT INTO event VALUES("Workshop on “Skills Enhancemen","Salalah College of Technology","2018-09-25","IT","Salalah","32S15159@ict.edu.om","99912345","The workshop aimed to re-enforce the skills of the Course Project students in making project proposal, project management, database design and modeling as a way to improve, strengthen and achieve qual","Workshop","http://www.sct.edu.om");



CREATE TABLE `user` (
  `Email` varchar(20) NOT NULL,
  `Password` varchar(15) NOT NULL,
  PRIMARY KEY (`Email`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("32J1234@ict.edu.om","XD234");
INSERT INTO user VALUES("32J1416@ict.edu.om","DF352");
INSERT INTO user VALUES("32J15327@ict.edu.om","1010");
INSERT INTO user VALUES("32J19152@ict.edu.om","BX566");
INSERT INTO user VALUES("32J6734532@ict.edu.o","2020");
INSERT INTO user VALUES("32S12139@ict.edu.om","JT723");
INSERT INTO user VALUES("32S14126@ict.edu.om","LK601");
INSERT INTO user VALUES("32S15143@ict.edu.om","WH562");
INSERT INTO user VALUES("32S5687@ict.edu.om","AB988");
INSERT INTO user VALUES("32S8763@ict.edu.om","GH147");
INSERT INTO user VALUES("34S3265@ict.edu.om","ZS432");
INSERT INTO user VALUES("36J15274@ict.edu.om","CV534");


ALTER DATABASE `pricampos` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci
;

CREATE TABLE ARTICLE
(
	IDARTICLE		INT AUTO_INCREMENT	NOT NULL,
	DSCATEGORY		VARCHAR(30)			NOT NULL,
	DSTITLE			VARCHAR(150)		NOT NULL,
	DSSUMMARY		VARCHAR(300)		NULL,
	DSKEYWORK		VARCHAR(100)		NULL,
	DSCONTENT		TEXT				NOT NULL,
	IMGBANNER		mediumBLOB			NOT NULL,
	DTDATEPOSTING	DATE				NOT NULL,
	DSLINKACCESS	VARCHAR(300)		NOT NULL,
	PRIMARY KEY (IDARTICLE)
)
;

ALTER TABLE ARTICLE ADD
	CONSTRAINT CKC_DSCATEGORY CHECK (DSCATEGORY IN ('Ágil', 'Boas Práticas', 'Front-End', 'Programação', 'Teste de Software'))
;
	
COMMIT;
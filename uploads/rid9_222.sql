SELECT *
FROM avatar
WHERE 
	(avatar.title = 'no data' or avatar.title = '' ) and
	(avatar.requirement = 'no data' or avatar.requirement = '')
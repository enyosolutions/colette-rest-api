#!/bin/bash
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
echo $DIR
cd "$DIR/../db/latest"
rm -Rf accommodation.bson user.bson propect.bson searches.bson
mongorestore . --drop --db=flyProd
mongo flyProd --shell  <<<'db.admin.insert({"createdAt": NumberLong(1445870457),"email": "email@test.com","firstname": "John", "lastname": "DOE","salt": "NVMEaq9cxX7qaRsV0d4rX8Us0iilFiFctocVUj1if0g","password": "fDcc0QQXDsqssAEBvB30wGkJAkAm+hgUXYGDge2crF+irVTvOZ66ziho6mwvHqTmgzYWXbT\/MLjLGENeaF9\/9g==","roles": ["ROLE_USER","ROLE_ADMIN","ROLE_SUPER_ADMIN"],"isEnabled": true,"isConfirmed": true,"confirmationToken": "HFTmTHg7nuNZfjHkroPHTS2Ilf8kelVdfVNvc4_UztQ","avatar": "","facebookId": ""});'

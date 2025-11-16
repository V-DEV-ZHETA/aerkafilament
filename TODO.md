# TODO: Add File Upload for Vehicle Photos on Member Resource

## Tasks
- [x] Add file upload field for vehicle photos in AnggotaResource form (multiple files allowed)
- [x] Update Anggota model to handle foto_kendaraan as array of file paths
- [x] Add migration to add foto_kendaraan column to anggotas table (JSON type)
- [x] Update AnggotaResource table to display vehicle photos if needed
- [x] Run the migration to add the column
- [ ] Test uploading vehicle photos in AnggotaResource

## Progress
- Revised plan to add file upload directly to AnggotaResource instead of creating separate resource

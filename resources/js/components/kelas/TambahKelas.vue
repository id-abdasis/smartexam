<template>
  <div>
    <form action="./api/admin/kelas/tambah-kelas" method="POST" @submit.prevent="TambahKelas()">
      <div class="form-group">
        <label for="kode_kelas">Kode Kelas</label>
        <input
          type="text"
          class="form-control"
          id="kode_kelas"
          aria-describedby="emailHelp"
          placeholder="Enter email"
          v-model="kode_kelas"
        />
        <small
          id="emailHelp"
          class="form-text text-muted"
        >We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="nama_kelas">Nama Kelas</label>
        <input
          type="text"
          class="form-control"
          id="nama_kelas"
          placeholder="Nama Kelas"
          v-model="nama_kelas"
        />
      </div>
      <div class="form-group">
        <label for="kode_level">Kode Tigkat</label>
        <input
          type="text"
          class="form-control"
          id="kode_level"
          placeholder="Kode Tingkat"
          v-model="kode_level"
        />
      </div>
      <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <input
          type="text"
          class="form-control"
          id="jurusan"
          placeholder="Jurusan"
          v-model="jurusan"
        />
      </div>
      <button type="submit" class="btn btn-primary waves-effect waves-light">
        <i class="ti-save mr-1"></i> Simpan Kelas
      </button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      kelas: [],
      kode_kelas: "",
      nama_kelas: "",
      kode_level: "",
      jurusan: ""
    };
  },
  methods: {
    TambahKelas() {
      axios
        .post("/api/admin/kelas/tambah-kelas", {
          kode_kelas: this.kode_kelas,
          nama_kelas: this.nama_kelas,
          kode_level: this.kode_level,
          jurusan: this.jurusan
        })
        .then(response => {
          this.kelas.push(response.data);
          console.log(response.data);
        });
    }
  }
};
</script>
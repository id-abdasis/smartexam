<template>
  <div>
    <div class="card">
      <div class="card-body">
        <h3 class="mb-3 header-title">Daftar Kelas</h3>
        <div class="table-responsive">
          <table class="table mb-0">
            <thead>
              <tr>
                <th>#</th>
                <th>Kode Kelas</th>
                <th>Nama Kelas</th>
                <th>Jurusan</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="kelas in daftarKelas" :key="kelas.id">
                <th scope="row">{{ kelas.id }}</th>
                <td>{{ kelas.nama_kelas }}</td>
                <td>{{ kelas.kode_kelas }}</td>
                <td>{{ kelas.jurusan }}</td>
                <td>{{ kelas.kode_tingkat }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      daftarKelas: []
    };
  },

  created() {
    axios.get("https://uasbk.in/api/admin/kelas").then(response => {
      console.log(response);
      this.daftarKelas = response.data;
    });
  }
};
</script>
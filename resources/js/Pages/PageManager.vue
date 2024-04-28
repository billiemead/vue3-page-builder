<script>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import SectionManager from '@/Components/Admin/SectionManager.vue';

export default (await import('vue')).defineComponent({
    components: {
        AdminLayout,
        SectionManager,
    },

    methods: {
        getPageSections() {
            alert("About to get page sections");
        }
    }
    })
</script>

<template>
    <AdminLayout>
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="row table-agile-info">
                        <div class="col-sm-3">
                            <div class="card page-selector">
                                <div class="card-header border-0">
                                    <h5 class="card-title">Choose a Page</h5>
                                </div>

                                <div class="card-body table-responsive">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group p-card-body">
                                                <label for="">Choose: </label>
                                                <select @change="getPageSections()" class="form-control" name="" id="">
                                                    <option value="">Home</option>
                                                    <option value="">About</option>
                                                    <option value="">Contact</option>
                                                </select>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="card page-sections">
                                <SectionManager> </SectionManager>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>
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
    },
    data() {
        return {
            pageSections: [
                {
                id: 1,
                title: 'Hero',
                contentType: 'hero',
                content: 'Will be replaced with Hero',
                },
                {
                id: 2,
                title: 'Courses',
                contentType: 'dynamic',
                content: 'Will be replaced with Courses',
                },
                {
                id: 3,
                title: 'Learn to Code',
                contentType: 'static',
                content: 'Will be replaced with Database content',
                },
                {
                id: 4,
                title: 'Why Choose Us',
                contentType: 'static',
                content: 'Will be replaced with Why Choose Us',
                },
            ],
        }
    },
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
                                <SectionManager v-for="(section,index) in pageSections" :key="section.id" :section="section"> </SectionManager>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>
<script>
export default (await import('vue')).defineComponent({
    data() {
        return{
            isPanelActive: false,
        }
    },
    methods: {
        togglePanel(){
            this.isPanelActive = !this.isPanelActive;
        }
    },
});
</script>

<template>
    <div @click="togglePanel()" class="accordion section-title">
        section title
        <font-awesome-icon icon="fa-plus"></font-awesome-icon>
    </div>
    <div class="panel" :class="{ active:isPanelActive }">
        <div class="panel-content">
            Panel Content
        </div>
        <div class="panel-footer">
            <div class="right-col">

            </div>
            <div class="left-col">
                <span class="delete-section">
                    &nbsp;&nbsp;<font-awesome-icon icon="fa-solid fa-trash"></font-awesome-icon>
                    delete section
                </span>
                <span class="delete-section">
                    &nbsp;&nbsp;<font-awesome-icon icon="fa-times"></font-awesome-icon>
                    deactivate section
                </span>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .active {
        display: block !important;
    }
    .panel-footer {
        margin-top: 25px;
        border-top: 1px solid #f0bcb4;
        padding: 15px;
        display: flex;
        justify-content: space-between;
    }
    .cursor-pointer {
        cursor: pointer;
    }
    .p-button {
        background: red;
    }
    .fa-times {
        color: #f0bcb4 !important;
    }
    .fa-trash {
        color: #ff6c60;
    }
    :deep(.gallery[data-v-446c7bb4]) {
        border: none !important;
    }
    .p-button {
        background: red;
    }
    .page-sections {
        padding: 20px;
    }
    .active, .accordion:hover {
        background-color: #ccc;
    }
    .panel {
        padding: 0 18px;
        background-color: white;
        display: none;
        overflow: hidden;
    }
    .slider-images div {
        width: 18%;
        margin-bottom: 15px;
    }
    .accordion {
        background-color: #ddede0 !important;
        border-color: #ddede0 !important;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        text-align: left;
        border: none;
        outline: none;
        transition: 0.4s;
        margin-bottom: 8px;
    }
    .accordion.active {
        background-color: #5d6368;
    }
    .section-title {
        font-weight: bold;
        display: flex;
        justify-content: space-between;
    }
    .slider-images {
        display: grid;
        grid-template-columns: auto auto auto auto;
    }
</style>
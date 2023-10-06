<style>
    #bottom-banner {
        display: none;
    }

    .code-editor {
        max-width: 300px;
        background-color: #1d1e22;
        box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.5);
        border-radius: 8px;
        padding: 2px;
    }

    .header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 10px;
    }

    .title {
        font-family: Lato, sans-serif;
        font-weight: 900;
        font-size: 14px;
        letter-spacing: 1.57px;
        color: rgb(212 212 212);
    }

    .icon {
        width: 20px;
        transition: .2s ease;
    }

    .icon:hover {
        cursor: pointer;
        border-radius: 50px;
        background-color: #6e7281;
    }

    .editor-content {
        margin: 0 10px 10px;
        color: white;
    }

    .property {
        margin-left: 30px;
    }

    .property:hover {
        cursor: text;
    }

    .editor-content .color-0 {
        color: rgb(86 156 214);
    }

    .editor-content .color-1 {
        color: rgb(182 206 168);
    }

    .editor-content .color-2 {
        color: rgb(156 220 254);
    }

    .editor-content .color-3 {
        color: rgb(207 146 120);
    }

    .color-preview-1,
    .color-preview-2 {
        height: 8px;
        width: 8px;
        border: 1px solid #fff;
        display: inline-block;
        margin-right: 3px;
    }

    .color-preview-1 {
        background-color: #b4ff00;
    }
</style>
<div id="bottom-banner" tabindex="-1" class="fixed bottom-0  right-0 z-50 flex   p-4">
    <div class="">
        <div class="code-editor ">
            <div class="header">
                <span class="title">CSS</span>
                <button data-dismiss-target="#bottom-banner" type="button"
                    class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-[#701CF9]  rounded-lg text-sm p-1.5 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="icon">
                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                        <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path stroke-linecap="round" stroke-width="2" stroke="#4C4F5A" d="M6 6L18 18"></path>
                            <path stroke-linecap="round" stroke-width="2" stroke="#4C4F5A" d="M18 6L6 18"></path>
                        </g>
                    </svg>
                </button>
            </div>
            <div class="editor-content">
                <code class="code">
                    <p><span class="color-0">.get-discount</span> <span>{</span></p>
                    <p class="property">
                        <span class="color-2">total-discount</span><span>:</span>
                        <span class="color-1">10%</span>;
                    </p>
                    <p class="property">
                        <span class="color-2">on-your-first-landing</span><span>:</span>
                        <span class="color-preview-1"></span><span>#b4ff00</span>;
                    </p>
                    <p class="property">
                        <span class="color-2"> discount-on</span><span>:</span>
                        <span class="color-1">OUR SERVICE</span>;
                    </p>
                    <p class="property">
                        <span class="color-2"><a href="/contact"
                                class="hover:text-blue-500">view-discount</span><span>:</span>
                        <span class="color-1">-></span> </a>;
                    </p>
                    <span>}</span>
                </code>
            </div>
        </div>
    </div>

</div>
<script>
    setTimeout(function() {
        document.getElementById('bottom-banner').style.display = 'block';
    }, 10000); // 10000 milisegundos = 10 segundos
</script>

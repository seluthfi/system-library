<!-- Field 1: Judul Buku -->
<div class="flex flex-col gap-1.5">
    <label class="font-label-lg text-label-lg text-on-surface flex items-center gap-1" for="title">
        Judul Buku
        <span class="text-tertiary-container text-base font-bold">*</span>
    </label>
    <div class="relative rounded-full">
        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none @error('title') text-tertiary-container @else text-on-surface-variant @enderror">
            <span class="material-symbols-outlined text-xl">menu_book</span>
        </div>
        <input 
            type="text" 
            id="title" 
            name="title" 
            placeholder="Judul Buku" 
            value="{{ old('title', $book->title ?? '') }}"
            class="w-full h-12 pl-11 pr-11 rounded-full backdrop-blur-md font-body-md text-body-md text-on-surface transition-all placeholder:text-on-surface-variant/50 focus:outline-none @error('title') bg-error-container/30 border border-error shadow-[inset_0_1px_3px_rgba(186,26,26,0.12),0_0_0_2px_rgba(200,26,66,0.35)] focus:shadow-[inset_0_1px_3px_rgba(186,26,26,0.12),0_0_0_3px_rgba(200,26,66,0.6)] @else bg-surface-container-lowest/70 border border-transparent shadow-[inset_0_1px_2px_rgba(0,0,0,0.04)] hover:bg-surface-container-lowest/90 focus:bg-surface-container-lowest focus:border-primary/30 focus:shadow-[0_0_0_3px_rgba(124,58,237,0.22)] @enderror"
        />
        @error('title')
            <div class="absolute inset-y-0 right-0 pr-4 flex items-center text-tertiary-container pointer-events-none">
                <span class="material-symbols-outlined text-xl" style="font-variation-settings: 'FILL' 1;">error</span>
            </div>
        @enderror
    </div>
    @error('title')
        <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-error-container/50 backdrop-blur-md text-on-error-container self-start shadow-xs mt-0.5">
            <span class="material-symbols-outlined text-sm font-bold text-tertiary-container">info</span>
            <span class="font-label-md text-label-md font-medium text-tertiary-container">{{ $message }}</span>
        </div>
    @enderror
</div>

<!-- Field 2: Penulis -->
<div class="flex flex-col gap-1.5">
    <label class="font-label-lg text-label-lg text-on-surface flex items-center gap-1" for="author">
        Penulis
        <span class="text-tertiary-container text-base font-bold">*</span>
    </label>
    <div class="relative rounded-full">
        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none @error('author') text-tertiary-container @else text-on-surface-variant @enderror">
            <span class="material-symbols-outlined text-xl">edit_note</span>
        </div>
        <input 
            type="text" 
            id="author" 
            name="author" 
            placeholder="Penulis" 
            value="{{ old('author', $book->author ?? '') }}"
            class="w-full h-12 pl-11 pr-11 rounded-full backdrop-blur-md font-body-md text-body-md text-on-surface transition-all placeholder:text-on-surface-variant/50 focus:outline-none @error('author') bg-error-container/30 border border-error shadow-[inset_0_1px_3px_rgba(186,26,26,0.12),0_0_0_2px_rgba(200,26,66,0.35)] focus:shadow-[inset_0_1px_3px_rgba(186,26,26,0.12),0_0_0_3px_rgba(200,26,66,0.6)] @else bg-surface-container-lowest/70 border border-transparent shadow-[inset_0_1px_2px_rgba(0,0,0,0.04)] hover:bg-surface-container-lowest/90 focus:bg-surface-container-lowest focus:border-primary/30 focus:shadow-[0_0_0_3px_rgba(124,58,237,0.22)] @enderror"
        />
        @error('author')
            <div class="absolute inset-y-0 right-0 pr-4 flex items-center text-tertiary-container pointer-events-none">
                <span class="material-symbols-outlined text-xl" style="font-variation-settings: 'FILL' 1;">error</span>
            </div>
        @enderror
    </div>
    @error('author')
        <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-error-container/50 backdrop-blur-md text-on-error-container self-start shadow-xs mt-0.5">
            <span class="material-symbols-outlined text-sm font-bold text-tertiary-container">info</span>
            <span class="font-label-md text-label-md font-medium text-tertiary-container">{{ $message }}</span>
        </div>
    @enderror
</div>

<!-- Grid 2-Column: Tahun Terbit & Stok Buku -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
    <!-- Field 3a: Tahun Terbit -->
    <div class="flex flex-col gap-1.5">
        <label class="font-label-lg text-label-lg text-on-surface flex items-center gap-1" for="year">
            Tahun Terbit
            <span class="text-tertiary-container text-base font-bold">*</span>
        </label>
        <div class="relative rounded-full">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none @error('year') text-tertiary-container @else text-on-surface-variant @enderror">
                <span class="material-symbols-outlined text-xl">calendar_today</span>
            </div>
            <input 
                type="number" 
                id="year" 
                name="year" 
                placeholder="Tahun Terbit" 
                value="{{ old('year', $book->year ?? '') }}"
                class="w-full h-12 pl-11 pr-11 rounded-full backdrop-blur-md font-body-md text-body-md text-on-surface transition-all placeholder:text-on-surface-variant/50 focus:outline-none @error('year') bg-error-container/30 border border-error shadow-[inset_0_1px_3px_rgba(186,26,26,0.12),0_0_0_2px_rgba(200,26,66,0.35)] focus:shadow-[inset_0_1px_3px_rgba(186,26,26,0.12),0_0_0_3px_rgba(200,26,66,0.6)] @else bg-surface-container-lowest/70 border border-transparent shadow-[inset_0_1px_2px_rgba(0,0,0,0.04)] hover:bg-surface-container-lowest/90 focus:bg-surface-container-lowest focus:border-primary/30 focus:shadow-[0_0_0_3px_rgba(124,58,237,0.22)] @enderror"
            />
            @error('year')
                <div class="absolute inset-y-0 right-0 pr-4 flex items-center text-tertiary-container pointer-events-none">
                    <span class="material-symbols-outlined text-xl" style="font-variation-settings: 'FILL' 1;">error</span>
                </div>
            @enderror
        </div>
        @error('year')
            <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-error-container/50 backdrop-blur-md text-on-error-container self-start shadow-xs mt-0.5">
                <span class="material-symbols-outlined text-sm font-bold text-tertiary-container">info</span>
                <span class="font-label-md text-label-md font-medium text-tertiary-container">{{ $message }}</span>
            </div>
        @enderror
    </div>

    <!-- Field 3b: Stok Buku -->
    <div class="flex flex-col gap-1.5">
        <label class="font-label-lg text-label-lg text-on-surface flex items-center gap-1" for="stock">
            Stok Buku
            <span class="text-tertiary-container text-base font-bold">*</span>
        </label>
        <div class="relative rounded-full">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none @error('stock') text-tertiary-container @else text-on-surface-variant @enderror">
                <span class="material-symbols-outlined text-xl">inventory_2</span>
            </div>
            <input 
                type="number" 
                id="stock" 
                name="stock" 
                placeholder="Stok Buku" 
                value="{{ old('stock', $book->stock ?? '') }}"
                class="w-full h-12 pl-11 pr-11 rounded-full backdrop-blur-md font-body-md text-body-md text-on-surface transition-all placeholder:text-on-surface-variant/50 focus:outline-none @error('stock') bg-error-container/30 border border-error shadow-[inset_0_1px_3px_rgba(186,26,26,0.12),0_0_0_2px_rgba(200,26,66,0.35)] focus:shadow-[inset_0_1px_3px_rgba(186,26,26,0.12),0_0_0_3px_rgba(200,26,66,0.6)] @else bg-surface-container-lowest/70 border border-transparent shadow-[inset_0_1px_2px_rgba(0,0,0,0.04)] hover:bg-surface-container-lowest/90 focus:bg-surface-container-lowest focus:border-primary/30 focus:shadow-[0_0_0_3px_rgba(124,58,237,0.22)] @enderror"
            />
            @error('stock')
                <div class="absolute inset-y-0 right-0 pr-4 flex items-center text-tertiary-container pointer-events-none">
                    <span class="material-symbols-outlined text-xl" style="font-variation-settings: 'FILL' 1;">error</span>
                </div>
            @enderror
        </div>
        @error('stock')
            <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-error-container/50 backdrop-blur-md text-on-error-container self-start shadow-xs mt-0.5">
                <span class="material-symbols-outlined text-sm font-bold text-tertiary-container">info</span>
                <span class="font-label-md text-label-md font-medium text-tertiary-container">{{ $message }}</span>
            </div>
        @enderror
    </div>
</div>

<!-- Field 4: Kategori Buku -->
<div class="flex flex-col gap-1.5">
    <label class="font-label-lg text-label-lg text-on-surface flex items-center gap-1" for="category_id">
        Kategori Buku
        <span class="text-tertiary-container text-base font-bold">*</span>
    </label>
    <div class="relative rounded-full">
        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none @error('category_id') text-tertiary-container @else text-on-surface-variant @enderror">
            <span class="material-symbols-outlined text-xl">category</span>
        </div>
        <select 
            id="category_id" 
            name="category_id" 
            class="w-full h-12 pl-11 pr-11 rounded-full backdrop-blur-md font-body-md text-body-md text-on-surface transition-all appearance-none cursor-pointer focus:outline-none @error('category_id') bg-error-container/30 border border-error shadow-[inset_0_1px_3px_rgba(186,26,26,0.12),0_0_0_2px_rgba(200,26,66,0.35)] focus:shadow-[inset_0_1px_3px_rgba(186,26,26,0.12),0_0_0_3px_rgba(200,26,66,0.6)] @else bg-surface-container-lowest/70 border border-transparent shadow-[inset_0_1px_2px_rgba(0,0,0,0.04)] hover:bg-surface-container-lowest/90 focus:bg-surface-container-lowest focus:border-primary/30 focus:shadow-[0_0_0_3px_rgba(124,58,237,0.22)] @enderror"
        >
            <option value="">Pilih Kategori</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" @selected(old('category_id', $book->category_id ?? '') == $category->id)>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none @error('category_id') text-tertiary-container @else text-on-surface-variant @enderror">
            <span class="material-symbols-outlined text-xl">expand_more</span>
        </div>
    </div>
    @error('category_id')
        <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-error-container/50 backdrop-blur-md text-on-error-container self-start shadow-xs mt-0.5">
            <span class="material-symbols-outlined text-sm font-bold text-tertiary-container">info</span>
            <span class="font-label-md text-label-md font-medium text-tertiary-container">{{ $message }}</span>
        </div>
    @enderror
</div>

<!-- Action Buttons Footer -->
<div class="pt-4 flex flex-col-reverse sm:flex-row items-center justify-end gap-3 sm:gap-4">
    <a href="{{ route('books.index') }}" class="w-full sm:w-auto px-7 py-3 rounded-full bg-surface-container-lowest/80 backdrop-blur-md text-on-surface hover:bg-surface-container-highest hover:text-on-surface-variant transition-all font-label-lg text-label-lg text-center shadow-xs flex items-center justify-center gap-2 no-underline">
        <span class="material-symbols-outlined text-lg">close</span>
        <span>Batal</span>
    </a>
    <button type="submit" class="w-full sm:w-auto px-8 py-3 rounded-full bg-gradient-to-r from-primary to-primary-container text-on-primary font-label-lg text-label-lg shadow-[0_8px_24px_-4px_rgba(124,58,237,0.45)] hover:shadow-[0_12px_28px_-2px_rgba(124,58,237,0.55)] hover:brightness-105 active:scale-[0.98] transition-all flex items-center justify-center gap-2 cursor-pointer border-0">
        <span class="material-symbols-outlined text-lg" style="font-variation-settings: 'FILL' 1;">check_circle</span>
        <span>Simpan Buku</span>
    </button>
</div>

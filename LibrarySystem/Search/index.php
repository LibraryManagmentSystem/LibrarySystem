<form>
            <input type="text" name="s" onblur="if (this.value == '')
                        this.value = 'tìm kiếm...';" onfocus="if (this.value == 'tìm kiếm...')
                                    this.value = '';" value="tìm kiếm..."/>
            
            <select>
                <option>Bạn đọc</option>
                <option>Tác giả</option>
                <option>Nhà xuất bản</option>
            </select>
            <input type="submit"  />
        </form>
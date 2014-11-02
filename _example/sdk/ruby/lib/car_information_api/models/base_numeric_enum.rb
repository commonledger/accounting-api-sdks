# Extracted from Remote API gem (https://github.com/cstrahan/rapi).

module CarInformationApi
  class BaseNumericEnum

    private
    def self.enum_attr(name, val)
      name = name.to_s

      define_method(name + '?') do
        @attrs & val != 0
      end

      define_method(name + '=') do |set|
        if set
          @attrs |= val
        else
          @attrs &= ~val
        end
      end
    end

    public
    def initialize(attrs = 0)
      @attrs = attrs
    end

    def to_i
      @attrs
    end

   def to_s
      @attrs.to_s
    end

  end
end